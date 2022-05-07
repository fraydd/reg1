<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class usuario extends Model
{
    use HasFactory;
/* Protección */
protected $fillable=[
        'nombre',
        'nombre_2',
        'apellido',
        'apellido_2',
        'edad',
        'foto',
        'Direccion',
        'telefono',
        'cantidad_hijos',
        'numeroid',
        'estado_id',
        'identificacion_id'
];

    /* Query scopes para realizar filtrado*/
    public function scopeNombre($query, $nombre){
        if($nombre)
            return $query->orWhere('nombre','LIKE',"%$nombre%");

    }
    public function scopeApellido($query, $apellido){
        if($apellido){
            return $query->where('apellido','LIKE',"%$apellido%");
        }
    }
    public function scopeNumeroid($query, $numeroid){
        if($numeroid)
            return $query->where('numeroid','LIKE',"%$numeroid%");

    }



    // recuperar registros
    public function identificacions(){
        return $this->belongsTo(identificacion::class,'usuario_id');
    }

    public function estados(){
    return $this->belongsTo(estado::class);
    }
}


