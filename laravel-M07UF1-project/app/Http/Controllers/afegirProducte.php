<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producte;

class afegirProducte extends Controller
{
    public function afegirProductes(Request $request)
    {
        Producte::create([
            'nom'=>$request->input('nom'),
            'descripcio'=>$request->input('descripcio'),
            'preu'=>$request->input('preu'),
            'stock'=>$request->input('stock'),
            'imatge'=>$request->file('imatge')->store('imatge')
        ]); 
return redirect()->route('mostrarProducte');
     
  }
}

?>
