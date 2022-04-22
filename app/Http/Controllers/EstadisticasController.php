<?php

namespace App\Http\Controllers;

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
        
        return view('estadisticas');
        //return "hola";
    }
    public function graph(Request $request){
        
    }
}
