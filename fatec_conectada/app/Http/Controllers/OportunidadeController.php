<?php

namespace App\Http\Controllers;

use App\Http\Requests\OportunidadeRequest;
use App\Models\Oportunidade;

class OportunidadeController extends Controller
{

    private $oportunidade;

    public function __construct(Oportunidade $oportunidade)
    {
        $this->oportunidade = $oportunidade;
    }

    public function index()
    {
        return $this->oportunidade->listarOportunidade();
    }

    public function store(OportunidadeRequest $request)
    {
        $validarOportunidade = $request->validated();
        $oportunidade = $this->oportunidade->cadastrarOportunidade($validarOportunidade);
        return response()->json([
            'message' => 'Oportunidade cadastrada com sucesso',
            'oportunidade' => $oportunidade,
        ], 201);
    }

    public function update(OportunidadeRequest $request, int $id)
    {
        $validarOportunidade = $request->validated();
        $oportunidade = $this->oportunidade->editarOportunidade($validarOportunidade, $id);
        return response()->json([
            'message' => 'Oportunidade editada com sucesso',
            'oportunidade' => $oportunidade,
        ], 200);
    }

    /**
     * Lista as oportunidades de acordo com id informado.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id)
    {
        $oportunidade = $this->oportunidade->getById($id);
        if (!$oportunidade) {
            return response()->json([
                'sucess' => false,
                'message' => 'Oportunidade não encontrada'
            ], 404);
        }
        return response()->json([
            'sucess' => true,
            'data' => $oportunidade
        ], 200);
    }

    public function destroy(int $id)
    {
        $this->oportunidade->excluirOportunidade($id);
        return response()->json([
            'message' => 'Oportunidade excluída com sucesso',
        ]);

    }

}
