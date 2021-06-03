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
Route::post('/creacion',[\App\Http\Controllers\UsuarioController::class,'store'])->name('users.store');

//areas
Route::get('/administracion', [\App\Http\Controllers\AdministracionController::class,'admini'])->name('ruta.admi');
Route::get('/difucion', [\App\Http\Controllers\AdministracionController::class,'difu'])->name('ruta.admi');
Route::get('/financieros', [\App\Http\Controllers\AdministracionController::class,'financieros'])->name('ruta.admi');
Route::get('/juridico', [\App\Http\Controllers\AdministracionController::class,'jurid'])->name('ruta.admi');
//difucion
Route::get('/difucion/proveedores', [\App\Http\Controllers\ProveedorController::class,'index'])->name('ruta.listadifucionproveedores');



// proveedores
Route::get('/difucion/añadirproveedores', [\App\Http\Controllers\ProveedorController::class,'irProvedor'])->name('ruta.iraproveedores');
Route::get('/difucion/añadirproveedorestv', [\App\Http\Controllers\ProveedorController::class,'Televisión'])->name('ruta.añadirproveedorestv');
//Route::get('/difucion/actualizar', [\App\Http\Controllers\ProveedorController::class, 'edit'])->name('ruta.actualizarInfo');
Route::post('/',[\App\Http\Controllers\ProveedorController::class,'store'])->name('ruta.storeCrearProvedor');
Route::patch('/usuario/{}',[\App\Http\Controllers\UsuarioController::class,'update'])->name('Usuario.update');





Route::get('Provedor/{id}',[App\Http\Controllers\ProveedorController::class,'detalles'])->name('ProvedorDetalle');
Route::get('Provedor/{proveedor}/edit',[App\Http\Controllers\ProveedorController::class,'edit'])->name('editarProvedores');
Route::patch('Provedor/{proveedor}',[App\Http\Controllers\ProveedorController::class,'update'])->name('Provedor.update');
Route::delete('Provedor/{proveedor}',[App\Http\Controllers\ProveedorController::class,'destroy'])->name('Provedor.destroy');



//provedores de tv
Route::get('/difucion/proveedorestelevision', [\App\Http\Controllers\ProveedortvController::class,'index'])->name('ruta.difucionproveedorestv');
Route::get('/difucion/agregarProvedorestv', [\App\Http\Controllers\ProveedortvController::class,'FormularioAgregarTv'])->name('ruta.irFormularioAgregarTv');
//agregar provedor tv
Route::post('/crear',[\App\Http\Controllers\ProveedortvController::class,'store'])->name('ruta.storeCrearProvedorTv');
//detalle del provedor
Route::get('Provedortv/{id}',[App\Http\Controllers\ProveedortvController::class,'detalles'])->name('ProvedortvDetalle');
//editar provedortv
Route::get('ProvedorTv/{proveedortv}/edit',[App\Http\Controllers\ProveedortvController::class,'edit'])->name('editarProvedoresTv');

Route::patch('ProveedorTv/{proveedortv}',[App\Http\Controllers\ProveedortvController::class,'update'])->name('ProvedorTv.update');
Route::delete('ProvedorTv/{proveedortv}',[App\Http\Controllers\ProveedortvController::class,'destroy'])->name('ProvedorTv.destroy');




//provedores de internet
Route::get('/difucion/proveedoresinternet', [\App\Http\Controllers\ProveedorInterController::class,'index'])->name('ruta.difucionproveedoresinternet');

Route::get('/difucion/agregarProvedoresInter', [\App\Http\Controllers\ProveedorInterController::class,'FormularioAgregarTv'])->name('ruta.irFormularioAgregarInter');
//agregar provedor INTER
Route::post('/crearInter',[\App\Http\Controllers\ProveedorInterController::class,'store'])->name('ruta.storeCrearProvedorInter');
//detalle del provedor
Route::get('ProvedorInter/{id}',[App\Http\Controllers\ProveedorInterController::class,'detalles'])->name('ProvedorInterDetalle');
//editar provedor
Route::get('ProvedorInter/{proveedorInter}/edit',[App\Http\Controllers\ProveedorInterController::class,'edit'])->name('editarProvedoresInter');

Route::patch('ProveedorInter/{proveedorInter}',[App\Http\Controllers\ProveedorInterController::class,'update'])->name('ProvedorInter.update');
Route::delete('ProvedorInter/{proveedorInter}',[App\Http\Controllers\ProveedorInterController::class,'destroy'])->name('ProvedorInter.destroy');



//provedores de impresos
Route::get('/difucion/proveedoresimpresos', [\App\Http\Controllers\ProveedorImpresoController::class,'index'])->name('ruta.difucionproveedoresimpresos');

Route::get('/difucion/agregarProvedoresImpresos', [\App\Http\Controllers\ProveedorImpresoController::class,'FormularioAgregarImpresos'])->name('ruta.irFormularioAgregarImpresos');
//agregar provedor
Route::post('/crearImpreso',[\App\Http\Controllers\ProveedorImpresoController::class,'store'])->name('ruta.storeCrearProvedorImpresos');
//detalle del provedor
Route::get('ProvedorImoreso/{id}',[App\Http\Controllers\ProveedorImpresoController::class,'detalles'])->name('ProvedorImpresoDetalle');
//editar provedor
Route::get('ProvedorImpreso/{proveedorImpreso}/edit',[App\Http\Controllers\ProveedorImpresoController::class,'edit'])->name('editarProvedoresImpresos');

Route::patch('ProveedorImpreso/{proveedorImpreso}',[App\Http\Controllers\ProveedorImpresoController::class,'update'])->name('ProvedorImpresos.update');
Route::delete('ProvedorImpreso/{proveedorImpreso}',[App\Http\Controllers\ProveedorImpresoController::class,'destroy'])->name('ProvedorImpresos.destroy');



//generar pdf
Route::get('Provedorpdf/{id}',[App\Http\Controllers\GenerarPdfController::class,'detallesP'])->name('GenerarPdf');
Route::get('Provedorpdfdescargado/{id}',[App\Http\Controllers\GenerarPdfController::class,'decargarPdf'])->name('GenerarPdfhecho');
