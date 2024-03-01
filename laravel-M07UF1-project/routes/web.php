<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mostrarProducte;
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
Route::get('/',[MainController::class, 'index']);
// Route::get('/', 'MainController')->name('main');

Route::get('/', [mostrarProducte::class, 'mostrarProductes']);

Route::post('/', [afegirProducte::class,'afegirProducte'])->name('afegirform');

Route::get('/afegirproducte', function () {
     return view('form');
 })->name('afegirProducteForm');

Route::post('/afegirProducte', [afegirProducte::class, 'afegirProducte'])->name('afegirForm');

