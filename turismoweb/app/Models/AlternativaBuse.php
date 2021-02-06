<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativaBuse extends Model
{
    //use HasFactory;
    public function compania_buse(){ //$libro->categoria->nombre
        return $this->belongsTo(CompaniaBuse::class); //Pertenece a una compañia aerea.
    }
}
