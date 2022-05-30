<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addiction extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];
        // Relacion muchos a muchos usuario-addiction

        public function usuarios(){
            return $this->belongsToMany('App\models\usuario');
        }
}
