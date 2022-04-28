<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'telefone',
        'cpf_cnpj',
        'id_endereco',
    ];
}

