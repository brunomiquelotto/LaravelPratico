<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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

    public function messages()
    {
        return [
            'nome.required'=>'Preencha um nome',
            'nome.max'=>'O nome pode ter até 255 caracteres',
            'email.required' => 'Preencha o campo email',
            'email.email' => 'Preencha um e-mail válido',
            'email.max:255' => 'O email pode até até 255 caracteres',
            'endereco.required'=>'Preencha o endereço'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=>'required|max:255',
            'email'=>'required|email|max:255',
            'endereco'=>'required'
        ];
    }
}
