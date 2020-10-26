<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaixaRequest extends FormRequest
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
        $id=$this->segment(2);
        return [
            'name'=>"required|min:3|max:255|unique:caixa,name,{$id},id",
            'banco_id'=>"required",
            'value'=>"required"
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Nome e Obrigatorio!',
            'name.unique'=>'Já existe um Banco cadastrada com esse nome!   ',
            'name.min' =>' Ops! Precisa informa pelo menos 3 caracteres no campo nome! ',
            'name.max' =>' Ops! Esse campo suporta somente 255 caracteres!  ',
            'banco_id.required'=>'Banco e Obrigatorio',
            'value.required'=>'Valor e Obrigatorio',
        ];
    }
}
