<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware('auth')->group(function () {
Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('/clientes', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');  
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');

Route::get('/paquetes', [PaqueteController::class, 'index'])->name('paquetes.index');
Route::post('/paquetes', [PaqueteController::class, 'store'])->name('paquete.store');
Route::get('/paquetes/create', [PaqueteController::class, 'create'])->name('paquete.create');
Route::delete('/paquetes/{paquete}', [PaqueteController::class, 'destroy'])->name('paquete.destroy');
Route::put('/paquetes/{paquete}', [PaqueteController::class, 'update'])->name('paquete.update');  
Route::get('/paquetes/{paquete}/edit', [PaqueteController::class, 'edit'])->name('paquetes.edit');


Route::get('/reservas', [ReservaController::class, 'index'])->name('Reservas.index');
Route::post('/reservas', [ReservaController::class, 'store'])->name('reserva.store');
Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reserva.create');
Route::delete('/reservas/{reserva}', [ReservaController::class, 'destroy'])->name('reserva.destroy');
Route::put('/reservas/{reserva}', [ReservaController::class, 'update'])->name('reserva.update');
Route::get('/reservas/{reserva}/edit', [ReservaController::class, 'edit'])->name('reservas.edit');
}); 
