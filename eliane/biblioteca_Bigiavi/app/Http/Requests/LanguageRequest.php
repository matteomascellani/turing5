<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
            'language.name'=>'required|max:191'
        ];
    }
    public function messages()
    {
        return[
            'language.name.required'=>'il campo del linguaggio è obbligatorio'
        ];
    }
}
