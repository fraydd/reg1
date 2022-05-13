<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class martial extends Model
{
    use HasFactory;

    public function usuarios(){
    
        return $this->hasOne(usuario::class,'martial_id');
        
    }
}
