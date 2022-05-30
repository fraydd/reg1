<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class usuario extends Model
{
    use HasFactory;
/* Protección */
protected $fillable=[
        'nombres',
        'apellidos',
        'fechan',
        'foto',
        'Direccion',
        'telefono',
        'cantidad_hijos',
        'numeroid',
        'ciudad',
        'fechaa',
        'estado_id',
        'pais_id',
        'identificacion_id',
        'gender_id',
        'sex_id',
        'martial_id',
        'occupation_id'
];

    /* Query scopes para realizar filtrado*/
    public function scopeNombre($query, $nombre){
        if($nombre)
            return $query->orWhere('nombres','LIKE',"%$nombre%");

    }
    public function scopeApellido($query, $apellido){
        if($apellido){
            return $query->where('apellidos','LIKE',"%$apellido%");
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

    public function paises(){
        return $this->belongsTo(pais::class);
        }

    public function genders(){
        return $this->belongsTo(gender::class);
        }

    public function occupations(){
        return $this->belongsTo(occupation::class);
        }

    public function sexes(){
        return $this->belongsTo(sex::class);
        }

    public function martials(){
        return $this->belongsTo(martial::class);
        }

    public function educations(){
        return $this->belongsTo(education::class);
        }
    // Relacion muchos a muchos usuario-addiction

    public function addictions(){
        return $this->belongsToMany('App\models\addiction');
    }
}


