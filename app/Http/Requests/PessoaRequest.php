<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PessoaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'          => 'required|min:2|max:60',
            'cpf'           => 'required|size:11|unique:pessoa',
            'endereco'      => 'nullable|max:100',
            'whatsapp'      => 'nullable|digits_between:10,11',
        ];

    }

}
