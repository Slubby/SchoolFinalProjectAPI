<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class VacancyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
	{
        return [
            'title' => ['required'],
            'description' => ['required'],
            'total' => ['integer'],
            'type' => ['required', 'exits:education,id']
        ];
    }
}
