<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    protected $primaryKey = 'id_endereco';
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'ibge',
    ];
}
