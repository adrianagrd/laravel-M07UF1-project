<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mostrarProducte extends Controller
{
    public function mostrarProducte(Request $request)
    {
        $producte = new Producte;
        $producte->nom = $request->nom;
        $producte->descripcio = $request->descripcio;
        $producte->preu = $request->preu;
        $producte->stock = $request->stock;
        $producte->imatge = $request->imatge;
        $producte->save();
        
        $productes = Producte::all();
        return view('main', ['productes' => $productes]);
    }
}
?>