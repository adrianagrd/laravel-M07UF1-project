<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    return view('mostrarProducte');

});
 //Route::get('/afegirProducte', 'afegirProducte@afegirProducte');
 Route::post('/afegirProducte', [afegirProducte::class, 'afegirProducte'])->name('afegirProducte');

  Route::post('/mostrarProducte', [mostrarProducte::class, 'mostrarProducte'])->name('afegirProducte');
