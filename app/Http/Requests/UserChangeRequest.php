<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserChangeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,' . $this->id],
            'admin' => ['required', 'boolean'],
            'permission_ids' => ['nullable', 'array'],
        ];
    }
}
