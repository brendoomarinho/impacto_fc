<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'cpf', 'data_nascimento', 'endereco', 'bairro', 'complemento',
        'numero', 'municipio', 'nome_pai', 'nome_mae', 'telefone_contato1', 'telefone_contato2'
    ];
}
