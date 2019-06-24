<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoEntregaRequest extends FormRequest
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
            'client_id' => 'numeric|required',
            'cep' => 'required',
            'logradouro' => 'required',
            'numero' => 'numeric|required',
            'complemento' => 'required',
            'bairro' => 'required',
            'cidade' => 'required'
        ];
    }
}
