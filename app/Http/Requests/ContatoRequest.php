<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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

        switch ($this->method()) {

            case 'POST'://criação de registro
                return 
                [
                    'saudaçao'   =>   'requered|max:5',
                    'nome'       =>   'requered|max:100',
                    'telefone'   =>   'requered|max:15',
                    'email'      =>   'email|max:200|unique:contato',
                    'data_nascimento' =>   'date_format:"d/m/Y"',
                    'avatar'     =>   'nullable|sometimes|image|mimes:jpg,jpeg,png,gif',
                ];
                break;
            case 'PUT'://atualização de registro
                return 
                [
                    'saudaçao'   =>   'requered|max:5',
                    'nome'       =>   'requered|max:100',
                    'telefone'   =>   'requered|max:15',
                    'email'      =>   'email|max:200|unique:contato,email,'.$this->id,
                    'data_nascimento' =>   'date_format:"d/m/Y"',
                    'avatar'     =>   'nullable|sometimes|image|mimes:jpg,jpeg,png,gif',
                ];
                break;

            default:break;
        }
        
    }
    public function messages(){

        return
        [
            'saudaçao.requered' => 'O campo saudaçao é Obrigatorio',
            'nome.requered' => 'O campo nome é Obrigatorio',
            'email.requered' => 'Informe um email valido',
            'data_nascimento.date_format' => 'O campo data deve ser no formato DD/MM/AAAA'
        ];
        
    }

}
