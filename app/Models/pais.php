<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    use HasFactory;
    public function estados(){
    
        return $this->hasMany(estado::class);
        
    }
}
