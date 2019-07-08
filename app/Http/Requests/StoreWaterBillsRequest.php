<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWaterBillsRequest extends FormRequest
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
        'customer_account' => 'required|string',
        'phone_number' => 'required|string',
        'location'     => 'required|string',
        'amount'       => 'required|numeric',
        'description'  => 'nullable|string',
        'pin'          => 'required|string|between:4,10'
        ];
    }
}
