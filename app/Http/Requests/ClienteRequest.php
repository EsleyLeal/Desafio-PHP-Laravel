<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'cpf' => 'required|string|max:14',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nome_social' => 'nullable|string|max:255',
        ];
    }

}
