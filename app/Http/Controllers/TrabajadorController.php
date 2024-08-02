<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use App\Models\User;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadores = Trabajador::all();
        return view('trabajadores.index', compact('trabajadores'));
    }

    public function create()
    {
        return view('trabajadores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:users,email',
            'password' => 'required',
            'telefono' => 'required',
            'estatus' => 'required',
        ]);

        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->correo,
            'password' => bcrypt($request->password),
            'phone' => $request->telefono,
            'status' => $request->estatus,
            'role' => 'trabajador',
        ]);

        Trabajador::create([
            'user_id' => $user->id,
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'password' => bcrypt($request->password),
            'telefono' => $request->telefono,
            'estatus' => $request->estatus,
        ]);

        return redirect()->route('trabajadores.index')->with('success', 'Trabajador creado exitosamente.');
    }

    public function edit(Trabajador $trabajador)
    {
        return view('trabajadores.edit', compact('trabajador'));
    }

    public function update(Request $request, Trabajador $trabajador)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:users,email,' . $trabajador->user->id,
            'telefono' => 'required',
            'estatus' => 'required',
        ]);

        $trabajador->user->update([
            'name' => $request->nombre,
            'email' => $request->correo,
            'phone' => $request->telefono,
            'status' => $request->estatus,
        ]);

        $trabajador->update([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'estatus' => $request->estatus,
        ]);

        return redirect()->route('trabajadores.index')->with('success', 'Trabajador actualizado exitosamente.');
    }

    public function destroy(Trabajador $trabajador)
    {
        $trabajador->user->delete();
        $trabajador->delete();

        return redirect()->route('trabajadores.index')->with('success', 'Trabajador eliminado exitosamente.');
    }
}

