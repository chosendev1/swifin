<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTVSubscriptionRequest extends FormRequest
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
            'tv_type'      => 'required|string',
            'package_name'      => 'nullable|string',
            'customer_account' => 'required|string',
            'phone_number' => 'required|string',
            'amount'       => 'required|numeric',
            'pin'          => 'required|integer|digits_between:4,10'
        ];
    }
}
