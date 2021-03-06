<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('usuarios', function(){
    return datatables()
    ->eloquent(App\Models\usuario::query())
    ->addColumn('btn', 'actions')
    ->rawColumns(['btn'])
    ->toJson();
});

Route::get('/usuario/{id}/estados',[App\Http\Controllers\UsuarioController::class, 'getEstados']);
