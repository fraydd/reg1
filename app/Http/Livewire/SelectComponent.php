<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\pais;
use App\Models\estado;
use App\Models\usuario;

class SelectComponent extends Component
{
    public $selectPais = null, $selectEstado= null;
    public $estados= null;
    public function render()
    {
        return view('livewire.select-component',[
            'paises'=>pais::all()
        ]);
    }

    public function updatedselectPais($pais_id){
        $this->estados=estado::where('pais_id',$pais_id)->get();
    }
}
