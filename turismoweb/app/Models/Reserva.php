<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //use HasFactory;
    public function reservas(){
        return $this->belongsTo(Cliente::class); //Pertenece a un cliente.
    }

    public function venta_paquetes()
    {
        return $this->hasOne(VentaPaquete::class); //una reserva tiene una venta
    }

    public function reserva_paquetes()
    {
        return $this->hasOne(Paquete::class);// una reserva tiene un paquete
    }
}
