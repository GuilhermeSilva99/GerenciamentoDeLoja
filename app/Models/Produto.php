<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'loja',
        'descricao',
        'nome',
        'preco',
        'quantidade',
        'cod_barras',
        'ativo',
    ];
}
