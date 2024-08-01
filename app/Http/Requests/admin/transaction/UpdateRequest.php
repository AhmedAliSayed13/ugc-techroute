<?php

namespace App\Http\Requests\admin\transaction;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Transaction;
use CoreProc\WalletPlus\Models\Wallet;

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
     * Prepare the data for validation.
     *
     * @return void
     */


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
        return $rules;
    }
}
