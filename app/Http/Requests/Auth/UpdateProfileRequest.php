<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255',
            'password' => 'confirmed', 'min:8',
            'address' =>  'string' , 'max:255',
            'role' => 'max:2'
        ];
    }

    public function messages(): array
    {
        return [
            'role.max' => "Please select a valid role"
        ];
    }
}
