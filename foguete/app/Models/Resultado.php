<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome_equipe',
        'distancia_percorrida',
        'quantidade_vinagre',
        'quantidade_bicarbonato',
    ];

}
