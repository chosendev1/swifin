<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUmemeBillsRequest extends FormRequest
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
            'umeme_bill_type' => 'required|string',
            'customer_account' => 'required|string',
            'phone_number' => 'required|string',
            'amount'       => 'required|numeric',
            'pin'          => 'required|integer|digits_between:4,10'
        ];
    }
}
