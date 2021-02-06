<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //use HasFactory;
    public function usuario_cliente()
    {
        return $this->hasOne(LoginCliente::class);// un cliente tiene un usuario
    }
}
