<?php

namespace App\Http\Requests\Options\Visitor;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateVisitorRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> 'required',
            'key'=> 'required',
            'redirect'=> 'required',
            
            
        ];
    }
   
}