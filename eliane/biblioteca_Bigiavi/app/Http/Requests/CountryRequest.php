<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            'country.state'=>'required|max:191',
            'country.code'=>'required|max:5'
        ];
    }
    public function messages()
    {
        return[
            'country.state.required'=>'il campo paese è obbligatorio',
            'country.code.required'=>'il campo codice è obbligatorio'
        ];

    }

}
