<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    //se HasFactory;
    public function alternativa_aerea(){
        return $this->belongsToMany(AlternativaAerea::class);
    }
    
    public function alternativa_hotel(){
        return $this->belongsToMany(AlternativaHotel::class);
    }
    
    public function alternativa_buse(){
        return $this->belongsToMany(AlternativaBuse::class);
    }
    
    public function alternativa_tour(){
        return $this->belongsToMany(AlternativaTour::class);
    }
}
