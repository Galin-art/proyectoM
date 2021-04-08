<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
//


Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home')->middleware('isadmin');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');








Route::get('/user', [\App\Http\Controllers\UsuarioController::class,'index'])->name('usuarios');

//usuarios
Route::get('/usuario',[\App\Http\Controllers\UsuarioController::class,'index'])->name('lista.Usuario');
Route::post('/',[\App\Http\Controllers\UsuarioController::class,'store'])->name('users.store');

//areas
Route::get('/administracion', [\App\Http\Controllers\AdministracionController::class,'admini'])->name('ruta.admi');
Route::get('/difucion', [\App\Http\Controllers\AdministracionController::class,'difu'])->name('ruta.admi');
Route::get('/financieros', [\App\Http\Controllers\AdministracionController::class,'financieros'])->name('ruta.admi');
Route::get('/juridico', [\App\Http\Controllers\AdministracionController::class,'jurid'])->name('ruta.admi');
