<?php

namespace App\Http\Controllers\Auth;

use Exception;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use ThrottlesLogins;

    /**
     * Username used in ThrottlesLogins trait
     *
     * @return string
     */
    public function username(): string
    {
        return 'email';
    }

    /**
     * @param Request $request
     * @return JsonResponse|void
     */
    public function login(Request $request): JsonResponse
    {
        try {
            if ($this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);

                $this->sendLockoutResponse($request);
            }

            $credentials = $request->only('email', 'password');
            if ($token = Auth::guard()->attempt($credentials, $request->filled('remember'))) {

                if (is_null(Auth::user()->email_verified_at)) {
                    if (VerificationController::emailVerifyCode(Auth::user())) {
                        return response()->json(['errors' => ['email' => 'Please verify your email']],  Response::HTTP_UNAUTHORIZED);
                    }

                    return response()->json(['message' => 'Something went wrong while sending the email'], Response::HTTP_BAD_REQUEST);
                }

                $this->clearLoginAttempts($request);
                return response()->json(['message' => 'You are logged in'])->header('Authorization', 'Bearer ' . $token);
            }

            $this->incrementLoginAttempts($request);
        } catch (ValidationException $e) {
            $seconds = $this->limiter()->availableIn($this->throttleKey($request));
            return response()->json(['errors' => ['password' => trans('auth.throttle', ['seconds' => $seconds])]], Response::HTTP_TOO_MANY_REQUESTS);
        } catch (Exception $e) {
            dd($e);
        }

        return response()->json(['errors' => ['password' => trans('auth.failed')]], Response::HTTP_FORBIDDEN);
    }
}
