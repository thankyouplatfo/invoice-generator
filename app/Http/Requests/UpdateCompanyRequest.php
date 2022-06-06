<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Client\Request;

class UpdateCompanyRequest extends FormRequest
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
            'name' => 'required|min:3|max:255|string',
            'sub_address' => 'required|min:3|max:255|string',
            'city' => 'required|min:3|max:255|string',
            'district' => 'required|min:3|max:255|string',
            'science' => 'required|min:3|max:255|string',
            'phone_number_1' => 'numeric|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'phone_number_2' => 'numeric|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'tax_number' => 'numeric|min:13',
        ];
    }
}
