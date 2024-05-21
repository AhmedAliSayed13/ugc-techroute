<?php

namespace App\Http\Requests\Marketing\Contract;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use App\Models\Contract;
use Carbon\Carbon;
class StoreContractRequest extends FormRequest
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
            'date_first_payment'=> 'required|date',
            'contract_type_id'=> 'required|integer',
            'customer_id'=> 'required|integer',
            'price'=> 'required|integer',
            
            
        ];
    }
    
}