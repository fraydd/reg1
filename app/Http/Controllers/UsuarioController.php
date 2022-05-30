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
use App\Models\occupation;
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
            ->paginate(100000);

        return view('usuarios.index',compact('uusers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* abort_unless(\Gate::allows('Create'),401); */
        $identificaciones=identificacion::all();
        
        $paises=pais::all()/* ->pluck('nombre','id')->prepend('Seleccione un país') */;
        $estados=estado::all();
        $addictions=addiction::all();
        $genders=gender::all();
        $sexes=sex::all();
        $martials=martial::all();
        $occupations=occupation::all();
        return view('usuarios.create',compact(  'identificaciones',
                                                'paises',
                                                'estados',
                                                'addictions',
                                                'genders',
                                                'sexes',
                                                'martials',
                                                'occupations',
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

        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'fechan'=>'required',
            
            'foto'=>'required',
            'numeroid'=>'required',
            'pais_id'=>'required',
            'estado_id'=>'required',
            'identificacion_id'=>'required',
            'gender_id'=>'required',
            'occupation_id'=>'required',
            'sex_id'=>'required',
            'martial_id'=>'required',
            'foto'=>'required|image|mimes:jpeg,png,svg,jpg|max:1000'

        ]);
        $usu=$request->all();
        
        if($foto=$request->file('foto')){
            $rutaGimg='images/';
            $imgP=date('YmdHis').".".$foto->getClientOriginalExtension();
            $foto->move($rutaGimg, $imgP);
            $usu['foto']="$imgP";
        }
        
/*         $data=request()->except('_token');
        if($request->hasFile('foto')){
            $data['foto']=$request->file('foto')->store('uploads','public');
        }
        if($request['nombre']==null){
            $nombre='NA';
        }
        usuario::insert($data); */
     
        usuario::create($usu); 
        
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
    public function show(int $iden)
    {
        $usuario=usuario::find($iden);
        $identificaciones=identificacion::find($usuario->identificacion_id);
        $pais=pais::find($usuario->pais_id);
        $estado=estado::find($usuario->estado_id);
        $genero=gender::find($usuario->gender_id);
        $sexo=sex::find($usuario->sex_id);
        $ocupacion=occupation::find($usuario->occupation_id);
        $civil=martial::find($usuario->martial_id);
        return view('usuarios.show',compact('usuario',
                                            'identificaciones',
                                            'pais',
                                            'estado',
                                            'genero',
                                            'sexo',
                                            'ocupacion',
                                            'civil',
                                            ));    
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
