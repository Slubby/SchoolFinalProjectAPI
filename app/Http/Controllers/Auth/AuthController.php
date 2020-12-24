<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UserPasswordChangeRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class AuthController extends Controller
{
    /**
     * @return UserResource|JsonResponse
     */
    public function user()
    {
        try {
            $user = Auth::user();
            $user->profile;

            return new UserResource($user);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong well getting user data'], 400);
    }

    /**
     * @param UserPasswordChangeRequest $request
     * @return JsonResponse
     */
    public function changePassword(UserPasswordChangeRequest $request): JsonResponse
    {
        $validation = (object) $request->validated();

        try {
            if (Hash::check($validation->previous_password, User::find(Auth::id())->password)) {
                if (ResetPasswordController::changePassword(Auth::id(), $validation->new_password)) {
                    return response()->json(['message' => trans('message.success.account.password.update')]);
                }
            } else {
                return response()->json(['errors' => ['previous_password' => 'Your previous password is incorrect']], 400);
            }
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Your password has been changed'], 400);
    }


    /**
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        try {
            $token = Auth::guard()->refresh();
            return response()->json()->header('Authorization', 'Bearer '. $token);
        } catch (TokenExpiredException | JWTException $e) {
            return response()->json(['message' => 'Unauthorized', 'action' => 'logout'], 401);
        }
    }

    /**
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        Auth::guard()->logout();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
