<?php

namespace App\Http\Controllers\Auth;

use App\Models\Company;
use App\Models\Teacher;
use App\Models\User;
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
     * @param User $user
     * @return false|string
     */
    private static function checkAccountIsVerified(User $user)
    {
        if (!$user->profile->verified) {
            if ($user->profile instanceof Company) {
                return "you can only log in when you have been verified by us";
            }

            if ($user->profile instanceof Teacher) {
                $school = $user->profile->school->name;
                return "the {$school} must first verify you in order to log in";
            }
        }

        return false;
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
            if ($token = Auth::guard()->attempt($credentials)) {
                $user = Auth::user();

                if (is_null($user->email_verified_at)) {
                    if (VerificationController::emailVerifyCode($user)) {
                        return response()->json(['errors' => ['email' => 'Please verify your email']],  Response::HTTP_UNAUTHORIZED);
                    }

                    return response()->json(['message' => 'Something went wrong while sending the email'], Response::HTTP_BAD_REQUEST);
                }

                if ($message = self::checkAccountIsVerified($user)) {
                    return response()->json(['message' => $message],  Response::HTTP_UNAUTHORIZED);
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
