<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Tipo_MaterialController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\IngresoMaterialController;
use App\Http\Controllers\GestorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/Usuarios/{id}/confirmDelete',[UsuarioController::class,'confirmDelete']);

Route::resource('/Tipo_Materiales', Tipo_MaterialController::class);
Route::get('/Tipo_Materiales/{id}/confirmDelete',[Tipo_MaterialController::class,'confirmDelete']);

Route::resource('/Materiales', MaterialController::class);
Route::get('/Materiales/{id}/confirmDelete',[MaterialController::class,'confirmDelete']);

Route::resource('/Ingresos', IngresoMaterialController::class);
Route::get('/Ingresos/{id}/confirmDelete',[IngresoMaterialController::class,'confirmDelete']);

Route::resource('/Gestores',GestorController::class);
Route::get('/Gestores/{id}/confirmDelete',[GestorController::class,'confirmDelete']);


Route::resource('/Usuarios', UsuarioController::class);
Route::get('/index', [UsuarioController::class, 'index'])->name('Usuarios.index');
Route::get('/index', [IndexController::class, 'index'])->name('index.index');