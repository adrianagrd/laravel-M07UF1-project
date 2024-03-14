<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producte;

class afegirProducte extends Controller
{
    public function afegirProducteNou(Request $request)
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
    }
    public function editarProducteForm($id){
        $producte = Producte::find($id);
    
        if (!$producte) {
            return back()->with('error', 'No se encontró el producto con el ID proporcionado.');
        }
    
        return view('editarProducte',['producte'=>$producte]);
    }
}
?>