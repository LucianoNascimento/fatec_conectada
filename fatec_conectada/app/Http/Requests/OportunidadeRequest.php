<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OportunidadeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'empresa' => ['required', 'string'],
            'titulo' => ['required', 'string'],
            'descricao' => ['required', 'string'],
            'salario' => ['required', 'numeric'],
            'tipo' => ['required', 'string', 'in:emprego,estagio,voluntario'],
        ];
    }
}
