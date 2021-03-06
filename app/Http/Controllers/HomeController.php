<?php

namespace App\Http\Controllers;
use \App\Models\identificacion;
use \App\Models\usuario;


use Illuminate\Http\Request;

class HomeController extends Controller
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
        //Sin paginación
         $usuar=usuario::all();
         $usuarios=usuario::all();
        //return view('home',compact('usuar')); 

        //Con paginación
        $usuar=usuario::paginate(20);
        return view('home',compact('usuar'),compact('usuarios')); 
    }
}
