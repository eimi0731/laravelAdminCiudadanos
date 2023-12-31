<?php

use App\Http\Controllers\EntradaController;
use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonaController;
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

Route::get('/',  'App\Http\Controllers\Auth\LoginController@login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('personas/pdf', [PersonaController::class,'pdf'])->name('personas.pdf');

Route::post('/getEntradas', [EntradaController::class, 'getEntradas']);
Route::get('/getEntradas', [EntradaController::class, 'getEntradas']);

Route::post('/agregar-entrada', [EntradaController::class, 'store']);
Route::get('/agregar-entrada', [EntradaController::class, 'getEntradas']);



//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('personas', PersonaController::class);
    Route::resource('entradas', EntradaController::class);
    
});
