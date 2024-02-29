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
            'id_imagen_toldo' => $req->id_imagen_toldo
        ]);
       $id = DB::table('toldos')->insertGetId([
            'nombre' => $req->nombre,
            'medidas' => $req->medidas,
            'color' => $req->color,
            'id_imagen_toldo' => 'imagenes/toldos_default.jpg', //Esta es clave foranea que apunta al id de "imagenes"
        ]);
        if($req->hasFile('imagen')){
            $extension=$req->imagen->extension();
            $nuevo='toldos'.$id_imagen_toldo.'.'.$extension;
            $ruta=$req->imagen->storeAs('imagenes',$nuevo,'public');
            $affected = DB::table('toldos')
            ->where('toldosid', $id)
            ->update([
                'imagen'=>$ruta,
            ]);
        }

        // $id_imagen_toldo = $req->id_imagen_toldo;
        // $imagenes = DB::table('imagenes')->get();
        $toldos = DB::table('toldos')->get();
        return view("/admin/tables_toldos", ['toldos'=> $toldos]);
    }
    public function actualizar(Request $req)
    {
        $id_imagen_toldo = DB::table('imagenes')->insertGetId([
            'id_imagen_toldo' => $req->id_imagen_toldo
            ]);
            
        DB::table('toldos')->where('id_toldo', $req->id_toldo)->update([
            'nombre' => $req->nombre,
            'medidas' => $req->medidas,
            'color' => $req->color,
            'id_imagen_toldo' => $id_imagen_toldo,
        ]);
        
        if($req->hasFile('imagen')){
            $extension=$req->imagen->extension();
            $nuevo='toldos'.$id_imagen_toldo.'.'.$extension;
            $ruta=$req->foto->storeAs('imagenes/toldos',$nuevo,'local');
            $affected = DB::table('toldos')
            ->where('toldos', $id_imagen_toldo)
            ->update([
                'imagen'=>$ruta,
            ]);
        }

        $toldos = DB::table('toldos')->get();
        return to_route('toldos.index', ['toldos'=> $toldos]);
        // return view('/admin/tables', ['toldos'=> $toldos]);
        // return 'saludos desde la funcion actualizar';
    }
    public function borrar($id)
    {
        // $toldos = DB::table('toldos')->get();
        $toldos = DB::table('toldos')->get();
        DB::table('toldos')->where('id_toldo', $id)->delete();
        return redirect('/admin/tables_toldos', ['toldos'=> $toldos]);

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
        // console.log("gia");
        if (!$toldo) {
            return 'No se encontró la toldo con el ID proporcionado.';
        }
        return view('selects.toldo_select', ['toldo' => $toldo]);
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
