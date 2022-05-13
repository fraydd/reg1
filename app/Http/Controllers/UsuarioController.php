<?php

namespace App\Http\Controllers;

use App\Models\addiction;
use App\Models\estado;
use App\Models\gender;
use App\Models\usuario;
use App\usuarios;
use Illuminate\Http\Request;
use App\Models\identificacion;
use App\Models\martial;
use App\Models\pais;
use App\Models\sex;
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
        $nombres=$request->get('nombres');
        $apellidos=$request->get('apellidos');
        $numeroid=$request->get('numeroid');



        $uusers=usuario::orderBy('id','ASC')
            ->nombre($nombres)
            ->apellido($apellidos)
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
        $addictions=addiction::all();
        $genders=gender::all();
        $sexes=sex::all();
        $martials=martial::all();
        return view('usuarios.create',compact(  'identificaciones',
                                                'paises',
                                                'estados',
                                                'addictions',
                                                'genders',
                                                'sexes',
                                                'martials',
                                            ));
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
     
        usuario::create($request->all()); 
        
/*         $paises=pais::all();
        $estados=estado::all();
        $identificaciones=identificacion::all();
        $addictions=addiction::all();
        $genders=gender::all();
        $sexes=sex::all();
        $martials=martial::all();
        return view('usuarios.create',compact(  'identificaciones',
                                                'paises',
                                                'estados',
                                                'addictions',
                                                'genders',
                                                'sexes',
                                                'martials',
                                            )); */
            return redirect()->back()->with('success','Usuario agregado');
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
