<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'student.nome'=> 'required|max:191',
            'student.cognome'=>'required|max:191',
            'student.anno_immatricolazione'=>'required|integer|lte:2021|gte:1900',
            'student.corso_frequentato'=>'required|max:191',
            'student.facoltà'=>'required|max:191',
            'student.anno_corso'=>'required|integer|lte:5|gte:1'
        ];
    }
    public function messages()
    {
        return [

          'student.nome.required' => 'il campo titolo è obbligatorio ',
          'student.cognome.required'=>'il campo categoria è obbligatorio ',
          'student.anno_immatricolazione.required'=>'il campo tipologia è obbligatorio ',
          'student.facoltà.required'=>'il campo anno è obbligatorio',
          'student.anno_corso.required'=>'il campo anno è obbligatorio',
          'student.facoltà.required'=>'il campo anno è obbligatorio',
          'student.anno_immatricolazione.integer'=>'il campo anno è un numero',
          'student.anno_corso.integer'=>'il campo anno è un numero',
          'film.anno_immatricolazione.lte'=>'il campo anno è massimo 2021',
          'film.anno_immatricolazione.gte'=>'il campo anno è minimo 1900',
          'film.anno_corso.lte'=>'il campo anno è massimo 5',
          'film.anno_corso.gte'=>'il campo anno è minimo 1'
        ];
    }
}
