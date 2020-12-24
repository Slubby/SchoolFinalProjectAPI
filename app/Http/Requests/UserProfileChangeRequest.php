<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileChangeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['max:255'],
            'last_name' => ['required', 'max:255'],
            'locale' => ['required'],
        ];
    }
}
