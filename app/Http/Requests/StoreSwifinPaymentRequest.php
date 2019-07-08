<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSwifinPaymentRequest extends FormRequest
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
            'phone_number'  => 'required|string',
            'amount'       => 'required|numeric',
            'description'  => 'nullable|string',
            //'pin'          => 'required|integer|digits_between:4,10'
        ];
    }

    /*public function messages()
    {
        return [
            'receiver_id.digits_between'  => 'The receiver id must be sixteen digits.',
        ];
    }*/
}
