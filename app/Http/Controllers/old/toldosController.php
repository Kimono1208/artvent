<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class toldosController extends Controller
{
    public function guardar(Request $req)
    {
        // dd($req->all());
        $id_imagen_toldo = DB::table('imagenes')->insertGetId([
            'nombre_archivo' => 'toldos_default.jpg',
            'tipo_archivo' => 'imagen/jpeg',
            'datos_archivo' => 'imagenes/toldos_default.jpg',
            'estatus' => 1
        ]);
       $id = DB::table('toldos')->insertGetId([
            'nombre' => $req->nombre,
            'medidas' => $req->medidas,
            'color' => $req->color,
            'id_imagen_toldo' => $id_imagen_toldo, //Esta es clave foranea que apunta al id de "imagenes"
        ]);
        
        if($req->hasFile('id_imagen_toldo')){
            $extension=$req->id_imagen_toldo->extension();
            $nuevo='toldos'.$id.'.'.$extension;
            $ruta=$req->id_imagen_toldo->storeAs('imagenes',$nuevo,'public');
            $affected = DB::table('imagenes')
            ->where('id_imagen', $id_imagen_toldo)
            ->update([
                'nombre_archivo' => $nuevo,
                'tipo_archivo' => 'imagen/'.$extension,
                'datos_archivo' => $ruta,
                'estatus' => 1
            ]);
        }

        // $id_imagen_toldo = $req->id_imagen_toldo;
        // $imagenes = DB::table('imagenes')->get();
        $toldos = DB::table('toldos')->get();
        $imagenes = DB::table('imagenes')->get();
        return view("/admin/tables_toldos", ['toldos'=> $toldos, 'imagenes'=> $imagenes]);
    }
    public function actualizar(Request $req)
    {
/*         $id_imagen_toldo = DB::table('imagenes')->insertGetId([
            'id_imagen_toldo' => $req->id_imagen_toldo
            ]); */

        DB::table('toldos')->where('id_toldo', $req->id_toldo)->update([
            'nombre' => $req->nombre,
            'medidas' => $req->medidas,
            'color' => $req->color,
            'id_imagen_toldo' => $req->id_toldo,
        ]);

        if($req->hasFile('id_imagen_toldo')){
            $extension=$req->id_imagen_toldo->extension();
            $nuevo='toldos'.$req->id_toldo.'.'.$extension;
            $ruta=$req->id_imagen_toldo->storeAs('imagenes',$nuevo,'public');
            $affected = DB::table('imagenes')
            ->where('id_imagen', $req->id_toldo)
            ->update([
                'nombre_archivo' => $nuevo,
                'tipo_archivo' => 'imagen/'.$extension,
                'datos_archivo' => $ruta,
                /* 'estatus' => 1 */
            ]);
        }

        $toldos = DB::table('toldos')->get();
        return to_route('toldos.index', ['toldos'=> $toldos]);
        // return view('/admin/tables', ['toldos'=> $toldos]);
        // return 'saludos desde la funcion actualizar';
    }
    public function borrar($id)
    {
        $toldo = DB::table('toldos')->where('id_toldo', $id)->first();
        $nuevoEstatus = $toldo->estatus == 1 ? 2 : 1;

        DB::table('toldos')->where('id_toldo', $id)->update([
            'estatus' => $nuevoEstatus
        ]);

        $toldos = DB::table('toldos')->get();
        /* DB::table('toldos')->where('id_toldo', $id)->delete(); */
        return to_route('toldos.index', ['toldos'=> $toldos]);

        // return 'Hola desde la funcion borrar';
    }
    public function listado()
    {
        $toldos = DB::table('toldos')->get();
        return view('/admin/tables_toldos', ['toldos'=> $toldos]);
    }
    public function select($id)
    {
        $toldo = DB::table('toldos')->where('id_toldo', $id)->first();
        $imagen = DB::table('imagenes')->where('id_imagen', $id)->first();
        // console.log("gia");
        if (!$toldo) {
            return 'No se encontró la toldo con el ID proporcionado.';
        }
        return view('selects.toldo_select', ['toldo' => $toldo],['imagen' => $imagen]);
        // return 'Saludos desde la funcion select id';
    }
    public function editar($id)
    {
        $toldo = DB::table('toldos')->where('id_toldo', $id)->first();
        if (!$toldo) {
            return 'No se encontró la toldo con el ID proporcionado.';
        }
        return view('formulariosc.toldos', ['toldo' => $toldo]);
        // return 'Saludos desde la funcion editar';
    }
    public function formulario()
    {
        return view('formulariosc.toldos');
        // return 'Saludos desde la funcion formulario';
    }
}
