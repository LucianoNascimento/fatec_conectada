<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = ['tipo', 'descricao', 'data_entrega', 'nota', 'id_usuario'];

    protected $casts = [
        'data_entrega' => 'datetime:d/m/Y',
    ];
}
