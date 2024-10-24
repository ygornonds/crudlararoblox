<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criador extends Model
{
    protected $table = 'criadores'; 
    protected $fillable = [
        'nome',
    ];
}
