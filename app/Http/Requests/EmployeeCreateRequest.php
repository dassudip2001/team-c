<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fast_name'=>'string|require|min:2',
            'last_name'=>'string|require|min:2',
            'email'=>'require|string',
            'date_of_birth'=>'require',
            'education'=>'string|require',
            'gender'=>'string',
            'company'=>'string',
            'packages'=>'require',
            'experience'=>'require'


        ];
    }
}
