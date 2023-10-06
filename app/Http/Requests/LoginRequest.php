<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|alpha',
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'The username field is required.',
            'username.alpha' => 'The username must be alphanumeric.',
            'email.required' => 'The email address field is be required.',
            'email.email' => 'The email address inserted must be valid.',
            'password.required' => 'The password field is be required.'
        ];
    }
}
