<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oportunidade extends Model
{
    protected $fillable = ['empresa', 'titulo', 'descricao', 'salario', 'tipo'];


    /**
     * Buscar uma atividade pelo ID.
     *
     * @param int $id
     * @return Oportunidade|null
     */
    public static function getById(int $id)
    {
        return self::find($id);
    }

    public static function listarOportunidade()
    {
        return self::all();
    }

    public static function cadastrarOportunidade(array $dados)
    {
        return self::create($dados);
    }

    public static function editarOportunidade(int $id, array $dados)
    {
        $atividade = self::findOrFail($id);

        $atividade->update($dados);

        return $atividade;
    }

    public static function excluirOportunidade(int $id)
    {
        $atividade = self::findOrFail($id);

        $atividade->delete();

        return $atividade;
    }


}
