<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;


class StockController extends Controller
{
    public function index()
    {
        $productes = Producte::all();
        return $productes;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producte = Producte::find($id);
        return $producte;
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
