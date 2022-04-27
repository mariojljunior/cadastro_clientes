<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $fillable = [
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'ibge'
    ];
}
