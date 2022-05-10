<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('usuario.index', [App\Http\Controllers\UsuarioController::class, 'index'])->name('uusers');
Route::get('/usuario/{id}', [App\Http\Controllers\UsuarioController::class, 'create']);


Route::resource('usuario',UsuarioController::class)->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();//['register'=> false]

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/estadisticas', [App\Http\Controllers\EstadisticasController::class, 'index']);
Route::get('acercade', [App\Http\Controllers\AcercadeController::class, 'index']);
Route::get('contacto', [App\Http\Controllers\ContactoController::class, 'index']);

