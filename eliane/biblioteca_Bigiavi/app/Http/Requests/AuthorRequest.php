<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'author.nome'=>'required|max:191',
            'author.cognome'=>'required|max:191',
            'author.codice'=>'required|max:191',
            'author.email'=>'required|email|max:191'

        ];
    }
    public function messages()
    {
        return [
            'author.nome.required'=>'il campo nome è obbligatorio',
            'author.cognome.required'=>'il campo cognome è obbligatorio',
            'author.codice.required'=>'il campo nome è obbligatorio',
            'author.email.required'=>'il campo nome è obbligatorio',
            'author.nome.email'=>'il campo email invalid ,form example: example@example.com',

        ];
    }
}
