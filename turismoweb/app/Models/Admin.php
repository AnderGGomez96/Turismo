<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //use HasFactory;

    public function usuario_admin()
    {
        return $this->hasOne(LoginAdmin::class);// un Admin tiene un usuario
    }
}
