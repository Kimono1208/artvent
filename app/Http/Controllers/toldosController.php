<?php

namespace App\Http\Controllers;

use App\Models\Toldos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToldosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toldos = Toldos::where('estatus', 1)->get();
        return view('/admin/tables_toldos', ['toldos' => $toldos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/formulariosc/toldos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'medidas' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'cantidad' => 'required|integer|min:0',
        'imagen_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('imagen_id')) {
        $path = $request->file('imagen_id')->store('imagenes', 'public');
        $validatedData['imagen_id'] = $path;
    }

    $toldo = new Toldos($validatedData);
    $toldo->estatus = 1;
    $toldo->save();

    return redirect()->route('toldos.index')->with('success', 'Toldo creado exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $toldo = Toldos::findOrFail($id);
        return view('selects.toldo_select', ['toldo' => $toldo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $toldo = Toldos::findOrFail($id);
        return view('/formulariosc/toldos', ['toldo' => $toldo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'medidas' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'cantidad' => 'nullable|integer|min:0',
            'imagen_id' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $toldo = Toldos::findOrFail($id);
    
        if ($request->hasFile('imagen_id')) {
            $path = $request->file('imagen_id')->store('imagenes', 'public');
            $validatedData['imagen_id'] = $path;
        }
    
        $toldo->update($validatedData);
    
        return redirect()->route('toldos.index')->with('success', 'Toldo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $toldo = Toldos::findOrFail($id);
        $toldo->estatus = $toldo->estatus == 1 ? 2 : 1;
        $toldo->save();

        return redirect()->route('toldos.index')->with('success', 'Toldo eliminado exitosamente.');
    }
}
