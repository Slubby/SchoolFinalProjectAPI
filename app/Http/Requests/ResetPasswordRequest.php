<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => ['required', 'min:' . env('PASSWORD_MIN_LENGTH'), 'max:' . env('PASSWORD_MAX_LENGTH'), 'case_diff', 'numbers', 'symbols'],
            'password_confirm' => ['required', 'same:password']
        ];
    }
}
