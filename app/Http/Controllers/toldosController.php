<?php

namespace App\Http\Controllers;

use App\Models\Toldos;
use Illuminate\Http\Request;

class ToldosController extends Controller
{
    public function index()
    {
        $toldos = Toldos::paginate(10);
        return view('admin.tables_toldos', compact('toldos'));
    }

    public function create()
    {
        return view('formulariosc.toldos');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ancho' => 'required|numeric',
            'largo' => 'required|numeric',
            'piezas' => 'required|integer',
            'lona_m2' => 'required|numeric',
            'luces' => 'boolean',
            'conexiones' => 'boolean',
            'mesas' => 'integer',
            'sillas' => 'integer',
            'tarimas' => 'integer',
            'color' => 'nullable|string|max:255',
            'cortinas' => 'boolean',
            'decoracion_extra' => 'nullable|string',
            'status' => 'required|in:disponible,no_disponible'
        ]);

        Toldos::create($request->all());

        return redirect()->route('toldos.index')->with('success', 'Toldo creado exitosamente.');
    }

    public function show(Toldos $toldo)
    {
        return view('admin.show_toldo', compact('toldo'));
    }

    public function edit(Toldos $toldo)
    {
        return view('formulariosc.toldos', compact('toldo'));
    }

    public function update(Request $request, Toldos $toldo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ancho' => 'required|numeric',
            'largo' => 'required|numeric',
            'piezas' => 'required|integer',
            'lona_m2' => 'required|numeric',
            'luces' => 'boolean',
            'conexiones' => 'boolean',
            'mesas' => 'integer',
            'sillas' => 'integer',
            'tarimas' => 'integer',
            'color' => 'nullable|string|max:255',
            'cortinas' => 'boolean',
            'decoracion_extra' => 'nullable|string',
            'status' => 'required|in:disponible,no_disponible'
        ]);

        $toldo->update($request->all());

        return redirect()->route('toldos.index')->with('success', 'Toldo actualizado exitosamente.');
    }

    public function destroy(Toldos $toldo)
    {
        $toldo->delete();
        return redirect()->route('toldos.index')->with('success', 'Toldo eliminado exitosamente.');
    }
}
