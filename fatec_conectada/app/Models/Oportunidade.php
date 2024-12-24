<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oportunidade extends Model
{
    protected $fillable = ['empresa', 'titulo', 'descricao', 'salario', 'tipo'];

}
