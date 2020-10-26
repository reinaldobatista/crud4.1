<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBancoRequest extends FormRequest
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
        $request=$this->request->all();
        return [
            'name' => 'required|unique:banco,name,'. $request['id'] .'|max:255|min:3',
            'conta' => 'required|unique:banco,conta,'. $request['id'] .'',
            'Nbanco'=>"required"
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Nome e Obrigatorio!',
            'name.unique'=>'Já existe um Banco cadastrada com esse nome!   ',
            'name.min' =>' Ops! Precisa informa pelo menos 3 caracteres no campo nome! ',
            'name.max' =>' Ops! Esse campo suporta somente 255 caracteres!  ',
            'conta.required'=>'Conta e Obrigatorio',
            'conta.unique'=>'Ja existe um Banco cadastrado com Essa conta',
            'Nbanco.required'=>'Numero do Banco e Obrigatorio',
        ];
    }
}
