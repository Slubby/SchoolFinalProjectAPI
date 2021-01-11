<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class SupervisorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'first_name' => ucfirst(strtolower($this->first_name)),
            'middle_name' => strtolower($this->middle_name),
            'last_name' => ucfirst(strtolower($this->last_name)),
        ]);
    }
}
