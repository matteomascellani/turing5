<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'film.titolo'=> 'required|max:191',
            'film.categoria'=>'required|max:191',
            'film.tipologia'=>'required|max:191',
            'film.anno'=>'required|integer|lte:2021|gte:1900'

        ];
    }
    public function messages()
    {
        return [
          'film.titolo.required' => 'il campo titolo è obbligatorio ',
          'film.categoria.required'=>'il campo categoria è obbligatorio ',
          'film.tipologia.required'=>'il campo tipologia è obbligatorio ',
          'film.anno.required'=>'il campo anno è obbligatorio',
          'film.anno.integer'=>'il campo anno è un numero',
          'film.anno.lte'=>'il campo anno è massimo 2021',
          'film.anno.gte'=>'il campo anno è minimo 1900'
        ];
    }
}
