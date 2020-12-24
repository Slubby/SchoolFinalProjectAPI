<?php

namespace App\Http\Controllers\Auth;

use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use stdClass;
use Exception;

class ForgotPasswordController extends Controller
{
    /**
     * @param User $User
     * @return bool
     */
    public static function passwordVerifyCode(User $User): bool
    {
        try {
            $verificationCode = str::random(env('CODE_LENGTH'));

            $passwordReset = User::find($User->id)->passwordReset()->firstOrNew();

            $passwordReset->used = 0;
            $passwordReset->user_id = $User->id;
            $passwordReset->verification_code = $verificationCode;

            $data = new stdClass();
            $data->mailer = 'noreply';
            $data->code = $verificationCode;
            $data->subject = 'Verify your email';

            Mail::mailer($data->mailer)->to($User->email)->send(new ResetPasswordMail($data));

            $passwordReset->save();

            return true;
        } catch (Exception $e) {
            report($e);

            dd($e);
        }

        return false;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function reset(Request $request): JsonResponse
    {
        try {
            $user = User::whereEmail($request->email)->firstOrFail();

            if (self::passwordVerifyCode($user)) {
                return response()->json(['message' => 'The email has been sent']);
            }

            return response()->json(['message' => 'Something went wrong while sending the email'], 400);
        } catch (Exception $e) {}

        return response()->json(['errors' => ['email' => 'Invalid email']], 400);
    }
}
