<?php

namespace App\Http\Controllers;

use App\Http\Requests\AtividadeRequest;
use App\Models\Atividade;

class AtividadeController extends Controller
{
    private $atividade;

    public function __construct(Atividade $atividade)
    {
        $this->atividade = $atividade;
    }

    public function index()
    {
        return $this->atividade->listarAtividades();
    }

    public function store(AtividadeRequest $request)
    {
        $validarAtividade = $request->validated();

        $atividade = $this->atividade->cadastrarAtividade($validarAtividade);

        return response()->json([
            'message' => 'Atividade cadastrada com sucesso',
            'atividade' => $atividade,
        ], 201);
    }

    public function update(AtividadeRequest $request, int $id)
    {

        $validarAtividade = $request->validated();
        $atividade = $this->atividade->editarAtividade($validarAtividade, $id);

        return response()->json([
            'message' => 'Atividade editada com sucesso',
            'atividade' => $atividade,
        ], 200);
    }

    /**
     * Lista a atividade de acordo com id informado.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id)
    {
        $atividade = $this->atividade->getById($id);
        if (!$atividade) {
            return response()->json([
                'sucess' => false,
                'message' => 'Atividade não encontrada'
            ], 404);
        }
        return response()->json([
            'sucess' => true,
            'data' => $atividade
        ], 200);
    }

    public function destroy(int $id)
    {
        $this->atividade->excluirAtividade($id);
        return response()->json([
            'sucess' => true,
            'message' => 'Atividade Excluída com sucesso'
        ], 200);
    }
}
