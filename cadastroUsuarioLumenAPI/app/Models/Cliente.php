<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    /**
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'telefone',
        'cpf_cnpj',
    ];
}

