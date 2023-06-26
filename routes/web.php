<?php

use App\Http\Controllers\BultoArriboController;
use App\Http\Controllers\ArriboController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\ImagenTraficoController;
use App\Http\Controllers\ParteController;
use App\Http\Controllers\TransportistaController;
use App\Http\Controllers\TraficoController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowBultosArribos;
use App\Http\Controllers\EvidenciaTraficoController;


//login
Route::get('/', function () {
    return view('auth.login');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//clientes
Route::middleware('auth')->group(function () {
    Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/cliente', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/cliente/{cliente:id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/cliente', [ClienteController::class, 'update'])->name('cliente.update');
    Route::delete('/cliente/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
});

//proveedores
Route::middleware('auth')->group(function() {
    Route::get('/proveedores',[ProveedorController::class,'index'])->name('proveedor.index');
    Route::get('/proveedor',[ProveedorController::class,'create'])->name('proveedor.create');
    Route::post('/proveedor',[ProveedorController::class,'store'])->name('proveedor.store');
    Route::get('/proveedor/{proveedor:id}', [ProveedorController::class, 'edit'])->name('proveedor.edit');
    Route::put('/proveedor', [ProveedorController::class, 'update'])->name('proveedor.update');
    Route::delete('/proveedor/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedor.destroy');

});

// Arribos
Route::middleware('auth')->group(function () {
    Route::get('/arribos',[ArriboController::class,'index'])->name('arribo.index');
    Route::get('/arribo',[ArriboController::class,'create'])->name('arribo.create');
    Route::post('/arribo',[ArriboController::class,'store'])->name('arribo.store');
    Route::get('/arribo/{arribo:id}',[ShowBultosArribos::class,'edit'])->name('arribo.edit');
    Route::put('/arribo',[ArriboController::class,'update'])->name('arribo.update');
    Route::delete('/arribo/{arribo}', [ArriboController::class, 'destroy'])->name('arribo.destroy');
});

//bultos de los arribos
Route::post('bultoArribo',[BultoArriboController::class,'store'])->name('bultoArribo.store');
Route::put('bultoArribo',[BultoArriboController::class,'update'])->name('bultoArribo.update');

//partes
Route::middleware('auth')->group(function () {
    Route::get('/partes',[ParteController::class,'index'])->name('parte.index');
    Route::get('/parte',[ParteController::class,'create'])->name('parte.create');
    Route::post('/parte',[ParteController::class,'store'])->name('parte.store');
    Route::get('/parte/{parte:id}',[ParteController::class,'edit'])->name('parte.edit');
    Route::put('/parte',[ParteController::class,'update'])->name('parte.update');
    Route::delete('/parte/{parte}', [ParteController::class, 'destroy'])->name('parte.destroy');
});

//traficos
Route::middleware('auth')->group(function (){
    Route::get('/traficos',[TraficoController::class,'index'])->name('trafico.index');
    Route::get('/trafico',[TraficoController::class,'create'])->name('trafico.create');
    Route::post('/trafico',[TraficoController::class,'store'])->name('trafico.store');
    Route::get('/trafico/{trafico:id}',[TraficoController::class,'edit'])->name('trafico.edit');
    Route::get('/factura/{trafico:id}',[TraficoController::class,'createfactura'])->name('factura.create');
});

Route::middleware('auth')->group(function (){
    Route::get('/transportistas',[TransportistaController::class,'index'])->name('tps.index');
    Route::get('/transportista',[TransportistaController::class,'create'])->name('tps.create');
    Route::post('/transportista',[TransportistaController::class,'store'])->name('tps.store');
    Route::get('/transportista/{transportista:id}', [TransportistaController::class,'edit'])->name('tps.edit');
    Route::put('/transportista',[TransportistaController::class,'update'])->name('tps.update');
    Route::delete('/transportista/{transportista}', [TransportistaController::class, 'destroy'])->name('tps.destroy');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store'); 
Route::post('/imagenesTrafico', [ImagenTraficoController::class, 'store'])->name('imagenesTrafico.store');  


Route::get('/evTrafico', [EvidenciaTraficoController::class,'index'])->name('evTrafico');
Route::get('/evTrafico/{trafico:id}',[EvidenciaTraficoController::class,'show'])->name('evTrafico.show');


require __DIR__ . '/auth.php';
