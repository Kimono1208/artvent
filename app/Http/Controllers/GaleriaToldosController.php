<?php

namespace App\Http\Controllers;

use App\Models\GaleriaToldos;
use App\Models\Imagenes;
use App\Models\Producto;
use Illuminate\Http\Request;

class GaleriaToldosController extends Controller
{
    public function index()
    {
        $galeriaToldos = GaleriaToldos::all();
        return view('admin/tables_toldos_galeria', compact('galeriaToldos'));
    }

    public function create()
    {
        /* $toldo = GaleriaToldos::all(); */

        // dd($toldo->nombre_toldo);
        return view('formulariosc/toldos_galeria'/* , compact('toldo') */);
    }

    public function store(Request $request)
    {
/*         $validated = $request->validate([
            // 'producto_id' => 'required|exists:productos,id',
            'nombre_toldo' => 'required|string|max:255',
            'imagen' => 'required',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'categoria' => 'required|string|max:255',
        ]); */
        $toldo = new GaleriaToldos();
        $toldo->nombre_toldo = $request->nombre_toldo;
        $toldo->descripcion = $request->descripcion;
        $toldo->precio = $request->precio;
        $toldo->categoria = $request->categoria;
        if ($request->hasFile('imagen') /* && $request->file('imagen')->isValid() */) {
            // Subir y guardar la imagen
            $imagenPath = $request->file('imagen')/* ->store('imagenes_clientes') */; // Guarda la imagen en storage/app/public/imagenes_clientes
            $nombreImagen = time() . '.' . $imagenPath->getClientOriginalExtension();
            $ruta = $imagenPath->storeAs('toldos_publicos', $nombreImagen, 'public');

            // Crear el registro de imagen
/*             $imagen = new Imagenes();
            $imagen->nombre = $request->file('imagen')->getClientOriginalName();
            $imagen->tipo = $request->file('imagen')->getClientOriginalExtension();
            $imagen->ruta = $ruta;
            $imagen->save(); */

            $toldo->imagen = $ruta;

        } else {
            // Si no se proporcionó una imagen, asigna una imagen por defecto
            $imagenPorDefecto = Imagenes::where('nombre', 'Default.png')->first();
            $toldo->imagen = $imagenPorDefecto;
        }

          // Guardar el toldo
          $toldo->save();

        // GaleriaToldos::create($validated);

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
