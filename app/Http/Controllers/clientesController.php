<?php

// app/Http/Controllers/ClientesController.php

namespace App\Http\Controllers;

use App\Models\Clientes; 
use App\Models\User;
use App\Models\Imagenes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Clientes::all();
        return view('formulariosc.clientes', compact('clientes'));
    }

    public function create()
    {
        return view('formulariosc.clientes');
    }

    public function store(Request $request)
{
    // Validación de los datos del cliente
    $request->validate([
        'nombre' => 'required',
        'rfc' => 'required',
        'telefono' => 'required',
        'direccion' => 'nullable',
        'email' => 'required|email|unique:clientes,email',
        'estatus' => 'nullable',
        'adeudo' => 'nullable',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ahora la imagen es opcional
    ]);

    // Crear el cliente
    $cliente = new Clientes();
    $cliente->nombre = $request->nombre;
    $cliente->rfc = $request->rfc;
    $cliente->telefono = $request->telefono;
    $cliente->direccion = $request->direccion;
    $cliente->email = $request->email;
    $cliente->estatus = $request->estatus;
    $cliente->adeudo = $request->adeudo;

    $user = new User();
    $user->email = $request->email;
    $user->nombre = $request->nombre;
    $user->telefono = $request->telefono;
    $cliente->user_id = $user->id;


    // Verificar si se proporcionó una imagen
    if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
        // Subir y guardar la imagen
        $imagenPath = $request->file('imagen')->store('imagenes_clientes'); // Guarda la imagen en storage/app/public/imagenes_clientes

        // Crear el registro de imagen
        $imagen = new Imagenes();
        $imagen->nombre = $request->file('imagen')->getClientOriginalName();
        $imagen->tipo = $request->file('imagen')->getClientOriginalExtension();
        $imagen->ruta = $imagenPath;
        $imagen->save();

        // Asignar la imagen al cliente
        $cliente->imagen_id = $imagen->id;
    } else {
        // Si no se proporcionó una imagen, asigna una imagen por defecto
        $imagenPorDefecto = Imagenes::where('nombre', 'Default.png')->first();

        if ($imagenPorDefecto) {
            $cliente->imagen_id = $imagenPorDefecto->id;
        } else {
            // Manejar el caso cuando no hay una imagen por defecto configurada
            // Puedes decidir lo que quieres hacer en este caso, por ejemplo, asignar NULL o un valor por defecto
            // $cliente->imagen_id = null;
        }
    }

    // Guardar el cliente
    $cliente->save();

    // Redirigir con mensaje de éxito
    return redirect()->route('clientes.index')->with('success', 'Cliente registrado satisfactoriamente.');
}


    public function show(Clientes $cliente)
    {
        return view('formulariosc.clientes', compact('cliente'));
    }

    public function edit(Clientes $cliente)
    {
        return view('formulariosc.clientes', compact('cliente'));
    }

    public function update(Request $request, Clientes $cliente)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'rfc' => 'required|string|max:255',
            'numero_telefono' => 'required|string|max:255',
            'direccion' => 'nullable|string',
            'imagen_id' => 'nullable|exists:imagenes,id',
            'email' => 'nullable|email',
            'estatus' => 'nullable|integer',
            'adeudo' => 'nullable|string'
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
