<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Profile\CompanyController;
use App\Http\Controllers\Profile\TeacherController;
use App\Http\Requests\User\UserCreateRequest;
use App\Models\Company;
use App\Models\Teacher;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

/**
 * @group Auth
 *
 * APIs for Accounts
 */
class RegisterController extends Controller
{
    /**
     * Account create
     *
     * @urlParam type required The type of user Example teacher or company. Example: teacher
     *
     * @bodyParam number integer required Company
     * @bodyParam name string required Company
     * @bodyParam country string required Company Example: NL
     * @bodyParam region string required Company Example: GR
     * @bodyParam city string required Company
     * @bodyParam street string required Company
     * @bodyParam house_number string required Company Example: 81
     * @bodyParam postal_code string required Company Example: 9603HL
     *
     * @bodyParam school integer required Teacher
     * @bodyParam first_name string required Teacher
     * @bodyParam middle_name string Teacher
     * @bodyParam last_name string required Teacher
     * @bodyParam short_name string required Teacher
     *
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
                        $profile = CompanyController::createOrUpdate($validation, new Company());
                        break;
                    case 'teacher':
                        $profile = TeacherController::createOrUpdate($validation, new Teacher());
                        break;
                    default:
                        $profile = false;
                }

                if ($profile) {
                    $profile->user()->save($user);

                    if (VerificationController::emailVerifyCode($user)) {
                        return response()->json(['message' => "Your {$type} account is successfully created"]);
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
