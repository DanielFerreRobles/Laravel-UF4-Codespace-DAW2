<?php

namespace App\Http\Controllers;

use App\Models\Futbolista;
use Illuminate\Http\Request;

class FutbolistaController extends Controller
{
    public function index()
    {
        $futbolistas = Futbolista::all();
        return view('futbolistas.index', compact('futbolistas'));
    }

    public function create()
    {
        return view('futbolistas.create');
    }

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

    public function show(Futbolista $futbolista)
    {
        //
    }

    public function edit(Futbolista $futbolista)
    {
        return view('futbolistas.edit', compact('futbolista'));
    }

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

    public function destroy(Futbolista $futbolista)
    {
        $futbolista->delete();
        return redirect()->route('futbolistas.index')->with('success', '¡Futbolista eliminado correctamente!');
    }
}
