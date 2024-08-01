<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Cotizaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceCotizacionMailable;

class CotizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = Cotizaciones::all();

        // if (request('search')) {
        //     $users
        //         ->where('name', 'like', '%' . request('search') . '%')
        //         ->orWhere('email', 'like', '%' . request('search') . '%')
        //         ->orWhere('id', 'like', '%' . request('search') . '%');
        // }
        $status = $request->input('status', 'all');

        // Construir la consulta basada en el estado
        $query = cotizaciones::query();

        if ($status !== 'all') {
            $query->where('status', $status);
        }

        // Obtener los resultados
        $cotizaciones = $query->get();

        // $cotizaciones = Cotizaciones::all();
        return view('admin.tables_cotizaciones', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $cotizacion = Cotizaciones::findOrFail($id);

        // $cotizacion->load('comments.user');
        
        return view('admin.invoice.generate-invoice', compact('cotizacion'));
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    { 
        // Cargar los comentarios y los usuarios relacionados
        $cotizacion = Cotizaciones::findOrFail($id);

/*         if (comments.user) {
            # code...
        } */
        // $cotizacion->load('comments.user');
        
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
    public function destroy($id)
    {
        $cotizacion = Cotizaciones::findOrFail($id);

        // $cotizacion->load('comments.user');

        $userEmail = auth()->user()->email;

        Mail::to($userEmail)->send(new InvoiceCotizacionMailable($cotizacion));
        
        return view('admin.invoice.generate-invoice', compact('cotizacion'));
    }

    public function payment($id)
    {
        $cotizacion = Cotizaciones::findOrFail($id);

        // $cotizacion->load('comments.user');
        
        return view('admin.invoice.generate-invoice', compact('cotizacion'));
    }
}
