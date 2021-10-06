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
            'book.titolo'=>'required|max:191',
            'book.author_id'=>'required',
            'book.category_id'=>'required',
            'book.language_id'=>'required',
            'book.pages'=>'required'

        ];
    }
    public function messages()
    {
        return [
          'book.titolo.required'=>'il campo Titolo del libro è obbligatorio',
          'book.author_id.required'=>'il campo Autore è obbligatorio,',
          'book.category_id.required'=>'il campo categoria è obbligatorio',
          'book.language_id.required'=>'il campo lingua è obbligatorio',
          'book.pages.required'=>'il campo numero pagine è obbligatorio'

        ];
    }
}
