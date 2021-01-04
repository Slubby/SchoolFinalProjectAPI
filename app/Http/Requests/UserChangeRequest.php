<?php

namespace App\Http\Requests;

use App\Models\Admin;
use App\Models\Company;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserChangeRequest extends FormRequest
{
    /**
     * @var array
     */
    private static array $company = [
        'country' => ['required'],
        'region' => ['required'],
        'city' => ['required'],
        'street' => ['required'],
        'house_number' => ['required'],
        'postal_code' => ['required'],
    ];

    /**
     * @var array
     */
    private static array $teacher = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'short_name' => ['required'],
    ];

    /**
     * @var array
     */
    private static array $student = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'gender' => ['required', 'in:male,female,other'],
        'birthday' => ['required', 'date'],
        'country' => ['required'],
        'region' => ['required'],
        'city' => ['required'],
        'street' => ['required'],
        'house_number' => ['required'],
        'postal_code' => ['required'],
    ];

    /**
     * @var array
     */
    private static array $admin = [
        'first_name' => ['required'],
        'last_name' => ['required'],
    ];

    /**
     * @return array
     */
    private static function type(): array
    {
        $type = Auth::user()->profile;

        if ($type instanceof Company) {
            return self::$company;
        } elseif ($type instanceof Teacher) {
            return self::$teacher;
        } elseif ($type instanceof Student) {
            return self::$student;
        } elseif ($type instanceof Admin) {
            return self::$admin;
        }

        return [];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $profile = self::type();
        $user = [
            'mobile' => ['required']
        ];

        return array_merge($user, $profile);
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'first_name' => ucfirst(strtolower($this->first_name)),
            'middle_name' => strtolower($this->middle_name),
            'last_name' => ucfirst(strtolower($this->last_name)),
            'short_name' => strtoupper($this->short_name),
            'country' => strtoupper($this->country),
            'region' => strtoupper($this->region),
            'city' => ucfirst($this->city),
            'street' => ucfirst($this->street),
            'postal_code' => strtoupper($this->postal_code),
        ]);
    }
}
