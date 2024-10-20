<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable = [
        'nome',
        'id_categoria',
        'id_criador'
    ];
    protected $table = 'jogos';
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }
    public function criador(){
        return $this->belongsTo(Criador::class, 'id_criador', 'id');
    }
}
