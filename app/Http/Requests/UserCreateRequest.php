<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * @var array
     */
    private array $company = [
        'number' => ['required', 'integer'],
        'name' => ['required', 'unique:company_profile,name'],
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
    private array $teacher = [
        'school' => ['required', 'integer'],
        'first_name' => ['required'],
        'last_name' => ['required'],
        'short_name' => ['required'],
    ];

    /**
     * @var array
     */
    private array $student = [

    ];

    /**
     * @var array
     */
    private array $admin = [

    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $profile = $this->{$this->type};
        $user = [
            'mobile' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:' . env('PASSWORD_MIN_LENGTH'), 'max:' . env('PASSWORD_MAX_LENGTH'), 'case_diff', 'numbers', 'symbols'],
            'password_confirm' => ['required', 'same:password'],
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
