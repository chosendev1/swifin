<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAirtimeRequest extends FormRequest
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
        'sender_id' => 'required|integer',
        'sender_name' => 'required|string',
        'receiver_phone_number' => 'required|string',
        'amount'       => 'required|numeric',
        'pin'          => 'required|string|between:4,10'
        ];
    }
}
