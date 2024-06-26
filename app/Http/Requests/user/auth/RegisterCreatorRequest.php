<?php

namespace App\Http\Requests\user\auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCreatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'country_id' => 'required|integer',
            'birthdate' => 'required|date',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'agree' => 'required',
        ];
    }
}
