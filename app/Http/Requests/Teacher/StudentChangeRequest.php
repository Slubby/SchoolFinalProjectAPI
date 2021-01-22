<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class StudentChangeRequest extends FormRequest
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
            'gender' => ['required', 'in:male,female,other'],
            'birthday' => ['required', 'date'],
            'country' => ['required'],
            'region' => ['required'],
            'city' => ['required'],
            'street' => ['required'],
            'house_number' => ['required'],
            'postal_code' => ['required'],
            'education' => ['required', 'integer', 'exists:educations,id'],
            'mentor' => ['required', 'integer', 'existsProfile:App\Models\Teacher'],
            'started' => ['required', 'date'],
            'grade' => ['required', 'integer'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'first_name' => ucfirst(strtolower($this->first_name)),
            'middle_name' => strtolower($this->middle_name),
            'last_name' => ucfirst(strtolower($this->last_name)),
            'country' => strtoupper($this->country),
            'region' => strtoupper($this->region),
            'city' => ucfirst($this->city),
            'street' => ucfirst($this->street),
            'postal_code' => strtoupper($this->postal_code),
        ]);
    }
}
