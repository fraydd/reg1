<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class DatatableController extends Controller
{
    public function user(){
        $user=usuario::all();
        return $user;
    }
}
