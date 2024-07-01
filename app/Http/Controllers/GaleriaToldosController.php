<?php

namespace App\Http\Controllers;

use App\Models\GaleriaToldos;
use App\Models\Producto;
use Illuminate\Http\Request;

class GaleriaToldosController extends Controller
{
    public function index()
    {
        $galeriaToldos = GaleriaToldos::all();
        return view('galeria_toldos.index', compact('galeriaToldos'));
    }

    public function create()
    {
        $productos = Producto::all();
        return view('galeria_toldos.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'nombre_toldo' => 'required|string|max:255',
            'imagen' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'categoria' => 'required|string|max:255',
        ]);

        GaleriaToldos::create($validated);

        return redirect()->route('galeria_toldos.index')->with('success', 'Toldo creado exitosamente.');
    }

    public function show(GaleriaToldos $galeriaToldos)
    {
        return view('galeria_toldos.show', compact('galeriaToldos'));
    }

    public function edit(GaleriaToldos $galeriaToldos)
    {
        $productos = Producto::all();
        return view('galeria_toldos.edit', compact('galeriaToldos', 'productos'));
    }

    public function update(Request $request, GaleriaToldos $galeriaToldos)
    {
        $validated = $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'nombre_toldo' => 'required|string|max:255',
            'imagen' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'categoria' => 'required|string|max:255',
        ]);

        $galeriaToldos->update($validated);

        return redirect()->route('galeria_toldos.index')->with('success', 'Toldo actualizado exitosamente.');
    }

    public function destroy(GaleriaToldos $galeriaToldos)
    {
        $galeriaToldos->delete();
        return redirect()->route('galeria_toldos.index')->with('success', 'Toldo eliminado exitosamente.');
    }
}