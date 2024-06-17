<?php

namespace App\Http\Controllers;

use App\Models\Piezas;
use Illuminate\Http\Request;

class PiezasController extends Controller
{
    public function index()
    {
        $piezas = Piezas::all();
        return view('admin.tables_piezas', compact('piezas'));
    }

    public function create()
    {
        return view('formulariosc.piezas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'ancho' => 'required|numeric|min:0',
            'largo' => 'required|numeric|min:0',
            'unicas' => 'required|boolean',
            'observaciones' => 'nullable|string',
            'status' => 'required|in:disponible,no_disponible',
        ]);

        Piezas::create($request->all());

        return redirect()->route('piezas.index')->with('success', 'Pieza creada con éxito.');
    }

    public function show($id)
    {
        $pieza = Piezas::findOrFail($id);
        return view('selects.pieza_select', compact('pieza'));
    }

    public function edit($id)
    {
        $pieza = Piezas::findOrFail($id);
        return view('formulariosc.piezas', compact('pieza'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'ancho' => 'required|numeric|min:0',
            'largo' => 'required|numeric|min:0',
            'unicas' => 'required|boolean',
            'observaciones' => 'nullable|string',
            'status' => 'required|in:disponible,no_disponible',
        ]);

        $pieza = Piezas::findOrFail($id);
        $pieza->update($request->all());

        return redirect()->route('piezas.index')->with('success', 'Pieza actualizada con éxito.');
    }

    public function destroy($id)
    {
        $pieza = Piezas::findOrFail($id);
        $pieza->delete();

        return redirect()->route('piezas.index')->with('success', 'Pieza eliminada con éxito.');
    }
}
