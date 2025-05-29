<?php

namespace App\Http\Controllers;

use App\Models\Futbolista;
use Illuminate\Http\Request;

class FutbolistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $futbolistas = Futbolista::all();
    return view('futbolistas.index', compact('futbolistas'));
}


    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    return view('futbolistas.create');
}

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'edad' => 'required|integer',
        'equipo' => 'required',
    ]);

    Futbolista::create($request->all());

    return redirect()->route('futbolistas.index')->with('success', '¡Futbolista creado correctamente!');
}
    /**
     * Display the specified resource.
     */
    public function show(Futbolista $futbolista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit(Futbolista $futbolista)
{
    return view('futbolistas.edit', compact('futbolista'));
}


    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Futbolista $futbolista)
{
    $request->validate([
        'nombre' => 'required',
        'edad' => 'required|integer',
        'equipo' => 'required',
    ]);

    $futbolista->update($request->all());

    return redirect()->route('futbolistas.index')->with('success', '¡Futbolista actualizado correctamente!');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Futbolista $futbolista)
{
    $futbolista->delete();
    return redirect()->route('futbolistas.index')->with('success', '¡Futbolista eliminado correctamente!');
}
}
