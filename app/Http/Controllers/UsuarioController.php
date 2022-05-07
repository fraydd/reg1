<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\usuarios;
use Illuminate\Http\Request;
use App\Models\identificacion;

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
    public function create()
    {
        $identificaciones=identificacion::all();
        return view('usuarios.create',compact('identificaciones'));
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
     
        usuario::create($request->all());
       
        $identificaciones=identificacion::all();
        return view('usuarios.create',compact('identificaciones'));
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
