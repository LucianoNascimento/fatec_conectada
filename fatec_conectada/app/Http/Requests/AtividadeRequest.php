<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtividadeRequest extends FormRequest
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
            'tipo' => ['required', 'string', 'in:aluno,professor,coordenador'],
            'descricao' => ['required', 'string'],
            'data_entrega' => ['required', 'date'],
            'nota' => ['required', 'numeric'],
            'id_usuario' => [' required', 'numeric'],
        ];
    }
}
