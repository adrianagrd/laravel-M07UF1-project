<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mostrarProducte;
use App\Http\Controllers\afegirProducte;
use App\Http\Controllers\MainController;
use App\Http\Controllers\eliminarProducte;

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



Route::get('/main', [MainController::class, 'index'])->name('main');

Route::get('/main', [mostrarProducte::class, 'mostrarProductes'])->name('mostrarProducte');

Route::post('/Productenou', [afegirProducte::class,'afegirProductes'])->name('afegirForm');

Route::get('/afegirproducte', function () {
    return view('form'); 
})->name('afegirProducteForm');

Route::post('/main', [eliminarProducte::class, 'eliminarProductes'])->name('eliminarProductes');
Route::get('/', [mostrarProducte::class, 'mostrarProductes']);

Route::get('/editarproducte/{id}', [afegirProducte::class, 'editarProducteForm'])->name('editarProducteForm');

Route::get('/buscar', [mostrarProducte::class, 'buscar'])->name('buscarProducte');

Route::get('/editar/{id}', [afegirProducte::class, 'editarProducteForm'])->name('editarProducteForm');

?>