<!-- 

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\pais;
use App\Models\estado;
use App\Models\usuario;

class SelectComponent extends Component
{
    public $pais , $estado;
    public $estados= [], $paises=[];

    public function mount(){
        $this->paises=pais::all();
        $this->estados=collect();
    }

    public function updatedPais($value){
        $this->estados=estado::where('pais_id',$value)->get();
        $this->estado=$this->estados->first()->id ?? null;
    }

    public function render()
    {
        
        return view('livewire.select-component',[
            'paises'=>pais::all()
        ]);
    }

    public function updatingSelectpais($pais_id){
        $this->estados=estado::where('pais_id','=',$pais_id)->get();
    }
} -->
