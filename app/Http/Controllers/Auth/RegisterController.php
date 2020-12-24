<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Profile\CompanyController;
use App\Http\Controllers\Profile\TeacherController;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @param UserCreateRequest $request
     * @param string $type
     * @return JsonResponse
     * @throws Exception
     */
    public function register(UserCreateRequest $request, string $type): JsonResponse
    {
        if (in_array($type, ['company', 'teacher'])) {
            $validation = (object) $request->validated();

            try {
                $user = new User();

                $user->email = $validation->email;
                $user->mobile = $validation->mobile;
                $user->password = Hash::make($validation->password);

                $user->save();

                switch ($type) {
                    case 'company':
                        $profile = CompanyController::create($validation);
                        break;
                    case 'teacher':
                        $profile = TeacherController::create($validation);
                        break;
                    default:
                        $profile = false;
                }

                if ($profile) {
                    $profile->user()->save($user);

                    if (VerificationController::emailVerifyCode($user)) {
                        return response()->json(['message' => "Your {$type} account is success fully created"]);
                    }

                    return response()->json(['message' => 'Something went wrong while sending the email'], Response::HTTP_BAD_REQUEST);
                }
            } catch (Exception $e) {
                report($e);
            }
        } else {
            return response()->json(['message' => 'You must choose between "company" or "teacher" as account'], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        if (!empty($user)) {
            $user->delete();
        }

        return response()->json(['message' => 'Something went wrong while creating a account'], Response::HTTP_BAD_REQUEST);
    }
}
