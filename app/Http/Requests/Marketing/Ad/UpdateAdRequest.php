<?php

namespace App\Http\Requests\Marketing\Ad;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateAdRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'time'=> 'required',
            'date'=> 'required|date',
            'details'=> 'required|string',
            'medias'=> 'nullable',
            // 'customer_id'=> 'required',
            // 'marketing_service_type_id'=> 'required'
            
        ];
    }
   
}