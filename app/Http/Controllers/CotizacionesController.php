<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Cotizaciones;
use Illuminate\Http\Request;

class CotizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cotizaciones = Cotizaciones::all();
        return view('admin.tables_cotizaciones', compact('cotizaciones'));
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
    public function show(Cotizaciones $cotizacion)
    {
        // Cargar los comentarios y los usuarios relacionados
        $cotizacion->load('comments.user');

        return view('selects.cotizacion_select', compact('cotizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cotizaciones $cotizacion)
    {
        dd($cotizacion);
/*         $cotizacion = new Cotizaciones();
        $cotizacion->status = 'rechazada';
        $cotizacion->save(); */
        $cotizacion->status = 'aprobada';
        $cotizacion->save();

        $comment = new Comments();
        $comment->comment = "fdsd";
        $comment->cotizacion_id = $cotizacion->id; // Asignar la clave foránea

        $comment->save();
        return redirect()->route('cotizaciones.index')->with('success', 'cotizaciones actualizado exitosamente.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cotizaciones $cotizacion)
    {
/*         $validated = $request->validate([
            'comment' => 'required|string|max:255',
        ]); */
        dd($request->comment);
        $comment = new Comments();
        $comment->comment = "fdsd";
        $comment->cotizacion_id = $cotizacion->id; // Asignar la clave foránea

        $comment->save();
    
        // Actualizar el estado de la cotización a "aprobada"
        // $pepe = $cotizaciones::findOrFail(1);
        $cotizacion->status = 'aprobada';
        $cotizacion->save();

        return redirect()->route('cotizaciones.index')->with('success', 'cotizaciones actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cotizaciones $cotizaciones)
    {
        //
    }
}
