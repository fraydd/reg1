<?php

namespace App\Http\Controllers;

use App\Models\estado;
use App\Models\usuario;
use App\usuarios;
use Illuminate\Http\Request;
use App\Models\identificacion;
use App\Models\pais;
use Illuminate\Auth\Access\Gate;
use App\Services\Paises;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)   // busqueda y filtrado
    {
        $nombre=$request->get('nombre');
        $apellido=$request->get('apellido');
        $numeroid=$request->get('numeroid');



        $uusers=usuario::orderBy('id','ASC')
            ->nombre($nombre)
            ->apellido($apellido)
            ->numeroid($numeroid)
            //->scopeNumero($numero)
            ->paginate(10);

        return view('usuarios.index',compact('uusers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        /* abort_unless(\Gate::allows('Create'),401); */
        $identificaciones=identificacion::all();
        
        $paises=pais::all()/* ->pluck('nombre','id')->prepend('Seleccione un país') */;
        $estados=estado::all();
        return view('usuarios.create',compact('identificaciones','paises','estados'));
    }

    public function getEstados($id){
        return estado::where('pais_id',$id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*         $data=request()->except('_token');
        if($request->hasFile('foto')){
            $data['foto']=$request->file('foto')->store('uploads','public');
        }
        if($request['nombre']==null){
            $nombre='NA';
        }
        usuario::insert($data); */
     
        usuario::create($request->all()); //  si algo sale mal

        $paises=pais::all();
        $estados=estado::all();
        $identificaciones=identificacion::all();
        return view('usuarios.create',compact('identificaciones','paises','estados'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
