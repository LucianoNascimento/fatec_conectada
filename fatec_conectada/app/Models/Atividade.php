<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = ['tipo', 'descricao', 'data_entrega', 'nota', 'id_usuario'];

    protected $casts = [
        'data_entrega' => 'datetime:d/m/Y',
    ];

    /**
     * Buscar uma atividade pelo ID.
     *
     * @param int $id
     * @return Atividade|null
     */
    public static function getById(int $id)
    {
        return self::findOrFail($id);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public static function listarAtividades()
    {
        return self::all();
    }

    public static function cadastrarAtividade(array $dados)
    {
        return self::create($dados);
    }

    public static function editarAtividade(array $dados, int $id)
    {
        $atividade = self::findOrFail($id);

        $atividade->update($dados);

        return $atividade;
    }

    public static function excluirAtividade(int $id)
    {
        $atividade = self::findOrFail($id);

        $atividade->delete();

        return $atividade;
    }

}
