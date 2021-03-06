<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function storeRules()
    {
        return [
            'email' => ['required', 'unique:users', 'email'],
            'password' => 'required',
            'name' => 'required'
        ];

    }

    public function loginRules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => 'required'
        ];

    }

}
