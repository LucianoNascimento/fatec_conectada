<?php

namespace App\Http\Controllers;

use App\Models\Oportunidade;

class OportunidadeController extends Controller
{

    private  $oportunidade;

    public function __construct(Oportunidade $oportunidade)
    {
        $this->oportunidade = $oportunidade;
    }
    public function index()
    {
        return $this->oportunidade->listarOportunidade();
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

}
