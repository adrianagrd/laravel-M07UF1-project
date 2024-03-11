<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eliminarProducte extends Controller
{
    public function eliminarProductes(Request $request)
    {
        /*
       Producte::delete([
            'id'=>$request->input('id'),
           
        ]);
        */
        return redirect()->route('mostrarProducte');
}
}
// 1- el boto ha de ser una peticio en post amb el id del producte 
// 2- el controlador ha de rebre el id del producte i fer un delete 
// on el id del producte sigui igual al id del producte que rebem