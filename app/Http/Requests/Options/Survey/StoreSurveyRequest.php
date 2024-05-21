<?php

namespace App\Http\Requests\Options\Survey;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use App\Models\Survey;
use Carbon\Carbon;
class StoreSurveyRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=> 'required|email',
            
            
            
        ];
    }
    
}