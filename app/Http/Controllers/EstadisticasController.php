<?php

namespace App\Http\Controllers;

use App\Models\occupation;
use App\Models\pais;
use App\Models\usuario;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        
        
        $usuarios=usuario::all();
        $data=[];
        foreach($usuarios as $usuario){
            $data['fechan'][]= $usuario->fechan;
            $data['fechaa'][]= $usuario->fechaa;
            $data['pais'][]= $usuario->pais_id;
            $data['ocupacion'][]= $usuario->occupation_id;
        }



        $paises=pais::all();
        $dataPais=[];
        foreach($paises as $pais){
            
            $dataPais['nombrePais'][]= $pais->nombre;
        }



        $ocupaciones=occupation::all();
        foreach($ocupaciones as $ocupacion){
            
            $dataPais['nombreOc'][]= $ocupacion->nombre;
        }



        
        $data['data']=json_encode($data);
        $dataPais['dataPais']=json_encode($dataPais);
        

        

        return view('estadisticas', $data,$dataPais);
        //return "hola";
    }
   

/*     public function charts(Request $request){
            return view('/estadisticas/charts');
    } */
}
