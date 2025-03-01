<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserChangeRequest;
use App\Http\Requests\User\UserPasswordChangeRequest;
use App\Http\Resources\UserResource;
use App\Traits\Profile;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

/**
 * @group Auth
 *
 * APIs for Account
 */
class AuthController extends Controller
{
    use Profile;

    /**
     * Account
     *
     * @authenticated
     *
     * @return UserResource|JsonResponse
     */
    public function user()
    {
        try {
            $user = Auth::user();
            $profile = $user->profile;
            $user->profile = self::profile($profile, 'user', $profile);

            return new UserResource($user);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong well getting user data'], 400);
    }

    /**
     * Account update
     *
     * @authenticated
     *
     * @bodyParam first_name string required Teacher/Student/Admin
     * @bodyParam middle_name string Teacher/Student/Admin
     * @bodyParam last_name string required Teacher/Student/Admin
     *
     * @bodyParam country string required Company/Student Example: NL
     * @bodyParam region string required Company/Student Example: GR
     * @bodyParam city string required Company/Student
     * @bodyParam street string required Company/Student
     * @bodyParam house_number string required Company/Student Example: 81
     * @bodyParam postal_code string required Company/Student Example: 9603HL
     *
     * @bodyParam short_name string required Teacher
     *
     * @bodyParam gender string required Student
     * @bodyParam birthday date required Student Example: 2001-09-29
     *
     * @param UserChangeRequest $request
     * @return UserResource|JsonResponse
     */
    public function changeProfile(UserChangeRequest $request)
    {
        $validation = (object) $request->validated();

        $user = Auth::user();
        $type = $user->profile;

        if (self::profile($type, 'createOrUpdate', $validation, $type)) {
            $user->refresh();

            return new UserResource($user);
        }

        return response()->json(['message' => 'Something went wrong while updating your profile'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Account change Password
     *
     * @authenticated
     *
     * @bodyParam previous_password string required
     * @bodyParam new_password string required
     * @bodyParam password_confirm string required
     *
     * @param UserPasswordChangeRequest $request
     * @return JsonResponse
     */
    public function changePassword(UserPasswordChangeRequest $request): JsonResponse
    {
        $validation = (object) $request->validated();

        try {
            $user = Auth::user();

            if (Hash::check($validation->previous_password, $user->password)) {
                if (ResetPasswordController::changePassword($user, $validation->new_password)) {
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
     * Account refresh token
     *
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
     * Account logout
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        Auth::guard()->logout();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
