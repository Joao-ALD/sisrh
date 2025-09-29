<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        "nome",
        "email",
        "telefone",
        "cargo_id",
        "funcao_id",
        "foto"
    ];

    //Relacionamento Cargo 

    public function cargo(){
        return $this->belongsTo(Cargo::class);
    }

    public function funcao(){
        return $this->belongsTo(Funcao::class);
    }
}
