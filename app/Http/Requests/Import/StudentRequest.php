<?php

namespace App\Http\Requests\Import;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'students' => ['required', 'file'],
            'password' => ['required', 'min:' . env('PASSWORD_MIN_LENGTH'), 'max:' . env('PASSWORD_MAX_LENGTH'), 'case_diff', 'numbers', 'symbols'],
        ];
    }
}
