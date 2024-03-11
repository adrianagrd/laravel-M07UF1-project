<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;
class test extends Controller
{
    public function mostrarProductes(){

        $productes = Producte::all();
        
        return view('main', ['productes' => $productes]);
    }
}
