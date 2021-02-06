<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativaHotel extends Model
{
    //use HasFactory;
    public function compania_hotel(){ //$libro->categoria->nombre
        return $this->belongsTo(CompaniaHotel::class); //Pertenece a una compañia aerea.
    }
}
