<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativaTour extends Model
{
    //use HasFactory;
    public function compania_tour(){ //$libro->categoria->nombre
        return $this->belongsTo(CompaniaTour::class); //Pertenece a una compañia aerea.
    }
}
