<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativaAerea extends Model
{
    //use HasFactory;
    public function compania_aerea(){ //$libro->categoria->nombre
        return $this->belongsTo(CompaniaAerea::class); //Pertenece a una compañia aerea.
    }
}
