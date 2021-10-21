<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'new_password.required' => 'The new password field is required',
            'new_password.min' => 'The new password must be at least 6 characters',
            'new_password.confirmed' => 'The new password confirmation does not match'
        ];
    }
}
