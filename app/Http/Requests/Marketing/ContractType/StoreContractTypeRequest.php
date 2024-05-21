<?php

namespace App\Http\Requests\Marketing\ContractType;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use App\Models\ContractType;
use Carbon\Carbon;
class StoreContractTypeRequest extends FormRequest
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
            
            
        ];
    }
    
}