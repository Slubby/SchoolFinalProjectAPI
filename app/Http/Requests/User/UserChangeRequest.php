<?php

namespace App\Http\Requests\User;


use App\Traits\Profile;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserChangeRequest extends FormRequest
{
    use Profile;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return self::profile(Auth::user()->profile, 'validations');
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
