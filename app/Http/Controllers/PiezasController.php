<?php

namespace App\Http\Controllers;

use App\Models\Imagenes;
use App\Models\Piezas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Piezas::all();
        // $piezas=DB::table('piezas')->get();
        $piezas=Piezas::all();
        return view('/admin/tables_piezas', ['piezas'=> $piezas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/formulariosc/piezas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pieza = new Piezas();
        $pieza->nombre = $request->nombre;
        $pieza->medidas = $request->medidas;
        $pieza->exclusiva = $request->exclusiva;
        $pieza->combinacion = $request->combinacion;
        $pieza->descripcion = $request->descripcion;
        $pieza->cantidad = $request->cantidad;
        // $pieza->imagen = $request->get('imagen');
        $pieza->estatus =1;

        $pieza->save();

/*         if($request->hasFile('id_imagen_toldo')){
            //Guardar la imagen cuando la imagen sea una columna
            $extension=$request->id_imagen_toldo->extension();
            $nuevo='toldos'.$pieza->id.'.'.$extension;
            $ruta=$request->id_imagen_toldo->storeAs('imagenes',$nuevo,'public');

            $pieza->imagen = $ruta;
            $pieza->save();

            //Guardar las imagenes cuando imagen sea una tabla
            foreach($request->id_imagen_toldo as $imagen){
                $extension = $imagen->extension();
                $nuevo = 'toldos'.$pieza->id.'_'.now().'.'.$extension;
                $ruta = $request->id_imagen_toldo->storeAs('imagenes',$nuevo,'public');

                $img = new Imagenes();

                $img->nombre_archivo = $nuevo;
                $img->tipo_archivo = 'imagen/'.$extension;
                $img->datos_archivo = $ruta;
                $img->estatus = 1;

                $img->save();

            }
        } */
        $piezas=Piezas::all();
        return view('admin.tables_piezas')->with('piezas',$piezas);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pieza=Piezas::find($id);
        // $piezas = DB::table('piezas')->where('id_pieza', $id)->first();
        return view('selects.pieza_select', ['pieza'=> $pieza]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $piezas=Piezas::find($id);
        return view('selects.pieza_select')->with('piezas',$piezas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pieza = Piezas::find($id);
        $pieza->nombre = $request->nombre;
        $pieza->medidas = $request->medidas;
        $pieza->exclusiva = $request->email;
        $pieza->combinacion = $request->combinacion;
        $pieza->descripcion = $request->descripcion;
        $pieza->cantidad = $request->cantidad;
        // $pieza->imagen = $request->imagen;
        $pieza->estatus=1;

        $pieza->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pieza = DB::table('piezas')->where('id_pieza', $id)->first();
        $nuevoEstatus = $pieza->estatus == 1 ? 2 : 1;

        DB::table('piezas')->where('id_pieza', $id)->update([
            'estatus' => $nuevoEstatus
        ]);

        $piezas = DB::table('piezas')->get();
        // DB::table('piezas')->where('id_pieza', $id)->delete();
        return to_route('piezas.index', ['piezas'=> $piezas]);
    }
}
