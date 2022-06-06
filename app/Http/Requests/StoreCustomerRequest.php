<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            //
            'name' => 'required|min:3|max:255|string|unique:companies',
            'city' => 'required|min:3|max:255|string',
            'district' => 'required|min:3|max:255|string',
            'science' => 'required|min:3|max:255|string',
            'phone' => 'numeric|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'tax_number' => 'numeric|min:13',
        ];
    }
}
