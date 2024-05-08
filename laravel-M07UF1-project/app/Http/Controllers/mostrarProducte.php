<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;

class mostrarProducte extends Controller
{
    public function mostrarProductes(){

        $productes = Producte::all();
        
        return view('main', ['productes' => $productes]);
    }

    // boton de buscar productos
    public function buscar(Request $request)
    {
        $busqueda = $request->input('q');

        //ignora mayusculas y minusculas del input de busqueda
        $productes = Producte::whereRaw('LOWER(nom) LIKE ?', [strtolower("%$busqueda%")])->get();

        return view('main', ['productes' => $productes]);
    }
}
?>