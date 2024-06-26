<?php

namespace App\Http\Requests\user\creator\profile;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfileCreatorRequest extends FormRequest
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
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|unique:users,email,' . Auth::user()->id,
            'address' => 'required',
            'phone' => 'required|unique:users,phone,' . Auth::user()->id,
            'country_id' => 'required|integer',
            'birthdate' => 'required|date',
            'gender' => 'required'
        ];
    }
}
