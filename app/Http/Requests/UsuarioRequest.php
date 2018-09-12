<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome do usuário é obrigatorio',
            'email.required' => 'O campo email é obrigatório!',
            'email.unique' => 'Já existe um usuário com este endereço de email cadastrado! Por favor informe um outro endereço de email.',
            'password.required' => 'Campo senha é de preenchimento obrigatório',
            'password.min' => 'Senha muito curta! Por favor insira uma senha de 6 digitos ou mais',
            'password.confirmed' => 'Senhas não coincidem. Por favor verifique as senhas e tente novamente',
        ];
    }
}
