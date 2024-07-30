<?php

namespace App\Http\Requests\admin\transaction;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UpdateRequest extends FormRequest
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
        $rules = [
            'transaction_status_id' => 'required|exists:transaction_statuses,id',
        ];

        // Add conditional rule
        $rules['value'] = function ($attribute, $value, $fail) {
            if ($this->transaction_status_id == 2 && $value <= 20) {
                $fail('The value must be more than 20 when the transaction status is 2.');
            }
        };

        return $rules;
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator(Validator $validator)
    {
        $validator->sometimes('value', 'required|numeric|min:21', function ($input) {
            return $input->transaction_status_id == 2;
        });
    }
}
