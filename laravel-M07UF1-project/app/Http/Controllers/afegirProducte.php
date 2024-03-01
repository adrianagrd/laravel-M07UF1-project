<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;

class afegirProducte extends Controller
{
    public function afegirProducte(Request $request)
    {
        $producte = new Producte;
        $producte->nom = $request->nom;
        $producte->descripcio = $request->descripcio;
        $producte->preu = $request->preu;
        $producte->stock = $request->stock;
        $producte->imatge=$imatge;
        $producte->save();
        return response()->json([
            "message" => "producte afegit"
        ], 201);
        redirect()->route('main');
    }
    public function index()
    {
        return redirect()->route('main');
    }

}
?>
