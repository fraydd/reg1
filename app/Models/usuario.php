<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    /* Query scopes para realizar filtrado*/
    public function scopeName($query, $Nombre1){
        if($Nombre1)
            return $query->orWhere('Nombre1','LIKE',"%$Nombre1%");

    }
    public function scopeApellido($query, $Apellido1){
        if($Apellido1){
            return $query->orWhere('Apellido1','LIKE',"%$Apellido1%");
        }
    }
    public function scopeEdad($query, $edad){
        if($edad)
            return $query->orWhere('edad','LIKE',"%$edad%");

    }
}


