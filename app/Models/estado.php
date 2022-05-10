<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    use HasFactory;
    public function pais(){
        return $this->belongsTo(pais::class);
        
        
    }
    public function usuarios(){
    return $this->hasMany(usuario::class);
    }
}
