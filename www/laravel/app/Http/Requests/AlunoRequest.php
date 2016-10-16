<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'matricula'=>'required|numeric',
            'nome'=>'required|max:60',
        ];
    }

    public function messages()
    {
      return [
        'matricula.required' => 'O campo matrícula é obrigatório',
        'matricula.numeric' => 'O campo matricula deve ser numérico',
        'nome.required' => 'O  campo nome é obrigatório',
        'nome.max' => 'O campo nome deve conter no máximo 60 caracteres',
      ];

    }

}
