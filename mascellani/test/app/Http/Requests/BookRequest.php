<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'book.name' => 'required|max:191',
            'book.author' => 'required|max:191',
            'book.pages' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'book.name.required' => 'Il libro è un campo obbligatorio',
            'book.name.max' => 'Numero caratteri superato',
            'book.author.required' => 'Devi indicare l\'autore',
            'book.pages.required' => 'Campo pagine mancante',
            'book.pages.integer' => 'Le pagine possono essere solo un numero intero'
        ];
    }
}
