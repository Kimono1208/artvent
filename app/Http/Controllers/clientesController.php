<?php

// app/Http/Controllers/ClientesController.php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\User;
use App\Models\Imagenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
        public function index()
        {
            $clientes = Clientes::all();
            return view('admin.tables_clientes', compact('clientes')); // Asegúrate de especificar correctamente la ruta a la vista
        }

    public function create()
    {
        return view('formulariosc.clientes');
    }

    public function store(Request $request)
{
    // dd($request->hasFile('imagen'));
    // Validación de los datos del cliente
    $request->validate([
        'nombre' => 'required',
        'rfc' => 'required',
        'phone' => 'nullable',
        'direccion' => 'nullable',
        'email' => 'required|email|unique:clientes,email',
        'estatus' => 'nullable',
        'adeudo' => 'nullable',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ahora la imagen es opcional
    ]);

    DB::beginTransaction();

        try {
            // Crear el usuario
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->nombre; // Asumiendo que 'nombre' es el nombre del usuario
            $user->phone = $request->phone; // Asumiendo que 'phone' es el teléfono del usuario
            $user->password = bcrypt($request->email); // Contraseña temporal, puedes cambiar esto según tus necesidades
            $user->save();

            // Crear el cliente
            $cliente = new Clientes();
            $cliente->nombre = $request->nombre;
            $cliente->rfc = $request->rfc;
            $cliente->phone = $request->phone;
            $cliente->direccion = $request->direccion;
            $cliente->email = $request->email;
            $cliente->estatus = $request->estatus;
            $cliente->adeudo = $request->adeudo;
            $cliente->user_id = $user->id;
//crea el usuario y el registro del cliente a la par y le asigna el rol de clinte

            // dd($request->hasFile('imagen'));

    // Verificar si se proporcionó una imagen
    if ($request->hasFile('imagen') /* && $request->file('imagen')->isValid() */) {
        // Subir y guardar la imagen
        $imagenPath = $request->file('imagen')/* ->store('imagenes_clientes') */; // Guarda la imagen en storage/app/public/imagenes_clientes
        $nombreImagen = time() . '.' . $imagenPath->getClientOriginalExtension();
        $ruta = $imagenPath->storeAs('imagenes_clientes', $nombreImagen, 'public');

        // Crear el registro de imagen
        $imagen = new Imagenes();
        $imagen->nombre = $request->file('imagen')->getClientOriginalName();
        $imagen->tipo = $request->file('imagen')->getClientOriginalExtension();
        $imagen->ruta = $ruta;
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

      // Commit de la transacción si todo fue exitoso
      DB::commit();

      // Redirigir con mensaje de éxito
      return redirect()->route('clientes.index')->with('success', 'Cliente registrado satisfactoriamente.');
  } catch (\Exception $e) {
      // Rollback de la transacción en caso de error
      DB::rollback();

      // Manejar el error según tus necesidades (por ejemplo, registrar el error o redirigir con un mensaje de error)
      return redirect()->back()->with('error', 'Error al registrar el cliente. Inténtalo de nuevo.');
  }
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
            'nombre' => 'required',
            'rfc' => 'required',
            'phone' => 'nullable',
            'direccion' => 'nullable',
            'email' => 'required|email',
            'estatus' => 'nullable',
            'adeudo' => 'nullable',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ahora la imagen es opcional
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
