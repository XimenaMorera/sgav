<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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
    return view('welcome');
});
Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('/clientes', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('cliente.create');