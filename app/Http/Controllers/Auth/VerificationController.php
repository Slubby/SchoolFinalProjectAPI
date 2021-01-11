<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VerifyMail;
use App\Models\User;
use App\Models\Verification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use stdClass;
use Exception;

/**
 * @group Auth
 *
 * APIs for Accounts
 */
class VerificationController extends Controller
{
    /**
     * @param User $User
     * @return bool
     */
    static public function emailVerifyCode(User $User): bool
    {
        try {
            $verificationCode = str::random(env('CODE_LENGTH'));

            $verification = User::find($User->id)->verification()->firstOrNew();

            $verification->verification_code = $verificationCode;

            $data = new stdClass();
            $data->mailer = 'noreply';
            $data->code = $verificationCode;
            $data->subject = 'Verify your email';

            Mail::mailer($data->mailer)->to($User->email)->send(new VerifyMail($data));

            $User->verification()->save($verification);

            return true;
        } catch (Exception $e) {
            report($e);
        }

        return false;
    }

    /**
     * Account verify
     *
     * @urlParam Code required The code in the email.
     *
     * @param string $Code
     * @return JsonResponse
     */
    public function check(string $Code): JsonResponse
    {
        try {
            $verification = Verification::whereVerificationCode($Code)->firstOrFail();
            $user = User::find($verification->user_id);

            if (is_null($user->email_verified_at)) {
                $time = Carbon::now();

                if ($verification->updated_at->addMinutes(env('CODE_EXPIRED')) >= $time) {
                    $user->email_verified_at = $time;
                    $user->save();

                    return response()->json(['message' => 'Your account has been verified']);
                }

                if (self::emailVerifyCode($user)) {
                    return response()->json(['message' => 'Verification code expired. A new email has been sent'], 498);
                }

                return response()->json(['message' => 'Something went wrong while sending the email'], 400);

            }

            return response()->json(['message' => 'Your account is already verified'], 400);
        } catch (Exception $e) {}

        return response()->json(['message' => 'Invalid verification code'], 498);
    }
}

