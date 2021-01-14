<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Mail\PasswordChangeMail;
use App\Models\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use stdClass;

/**
 * @group Auth
 *
 * APIs for Accounts
 */
class ResetPasswordController extends Controller
{
    /**
     * @param int $UserId
     * @param string $Password
     * @return string
     */
    public static function changePassword(int $UserId, string $Password) {
        try {

            $user = User::find($UserId);
            $user->password = bcrypt($Password);
            $user->save();

            $data = new stdClass();
            $data->mailer = 'noreply';
            $data->subject = 'Password changed';

            Mail::mailer($data->mailer)->to($user->email)->send(new PasswordChangeMail($data));

            return true;
        } catch (\Exception $e) {
            report($e);
        }

        return false;
    }

    /**
     * Account reset password
     *
     * @urlParam code required The reset code in the email. Example: WrCegVUunSCJPFETrBsp6nCmR398X9
     *
     * @bodyParam password string required
     * @bodyParam password_confirm string required
     *
     * @param ResetPasswordRequest $request
     * @param string $Code
     * @return JsonResponse
     */
    public function check(ResetPasswordRequest $request, string $Code): JsonResponse
    {
        try {
            $reset = PasswordReset::whereVerificationCode($Code)->firstOrFail();

            if (!$reset->used) {
                $time = Carbon::now();

                if ($reset->updated_at->addMinutes(env('CODE_EXPIRED')) >= $time) {
                    $validation = (object) $request->validated();

                    if (self::changePassword($reset->user_id, $validation->password)) {
                        $reset->used = 1;
                        $reset->save();

                        return response()->json(['message' => 'Your password has been changed']);
                    }

                    return response()->json(['message' => 'Something went wrong while changing your password. Please try again'], 400);
                }
            }
        } catch (\Exception $e) {}

        return response()->json(['message' => 'Invalid verification code'], 498);
    }
}
