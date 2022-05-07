<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\usuario;
class identificacion extends Model
{
    use HasFactory;
    
    public function scopeNumero($query, $numero){
        if($numero)
            return $query->where('numero',"%$numero%");

    }

    //<--relacion-->

    public function usuarios(){
    
        return $this->hasOne(usuario::class,'identificacion_id');
        
    }
}
