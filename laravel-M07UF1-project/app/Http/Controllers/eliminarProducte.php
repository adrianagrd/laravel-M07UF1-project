<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte; 

class eliminarProducte extends Controller
{
    public function eliminarProductes(Request $request)
    {
        // Obtener el ID del producto a eliminar desde la solicitud
        $id = $request->input('id');
        
        // Buscar el producto por su ID y eliminarlo
        $producte = Producte::find($id);
        if ($producte) {
            $producte->delete();
        }
        
        // Redireccionar a la página de mostrar productos
        return redirect()->route('mostrarProducte');
    }
}
?>
