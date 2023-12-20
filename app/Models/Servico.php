<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $fillable = [
        'loja',
        'responsavel',
        'descricao',
        'preco',
        'data_entrada',
        'data_saida'
    ];
}
