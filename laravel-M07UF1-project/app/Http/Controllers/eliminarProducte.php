<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte; 

class eliminarProducte extends Controller
{
    public function eliminarProductes(Request $request)
    {
        $id = $request->input('id');

        $producte = Producte::find($id);
        if ($producte) {
            $producte->delete();
        }
        
        return redirect()->route('mostrarProducte');
    }
}
?>
