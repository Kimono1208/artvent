<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PiezasController extends Controller
{
    public function guardar(Request $req)
    {
        // dd($req->all());
        DB::table('piezas')->insert([
            'nombre' => $req->nombre,
            'medidas' => $req->medidas,
            'exclusiva' => $req->exclusiva,
            'combinacion' => $req->combinacion,
            'descripcion' => $req->descripcion,
            'cantidad' => $req->cantidad,
        ]);
        $piezas = DB::table('piezas')->get();
        return view("/admin/tables", ['piezas'=> $piezas]);
        // return 'Saludos desde la funcion guardar';
    }
    public function actualizar(Request $req)
    {
        DB::table('piezas')->where('id_pieza', $req->id_pieza)->update([
            'nombre' => $req->nombre,
            'medidas' => $req->medidas,
            'exclusiva' => $req->exclusiva,
            'combinacion' => $req->combinacion,
            'descripcion' => $req->descripcion,
            'cantidad' => $req->cantidad,
        ]);
        $piezas = DB::table('piezas')->get();
        return to_route('piezas.index', ['piezas'=> $piezas]);
        // return view('/admin/tables', ['piezas'=> $piezas]);
        // return 'saludos desde la funcion actualizar';
    }
    public function borrar($id)
    {
        // $piezas = DB::table('piezas')->get();
        $piezas = DB::table('piezas')->get();
        DB::table('piezas')->where('id_pieza', $id)->delete();
        return redirect('/admin/tables', ['piezas'=> $piezas]);

        // return 'Hola desde la funcion borrar';
    }
    public function listado()
    {
        $piezas = DB::table('piezas')->get();
        return view('/admin/tables', ['piezas'=> $piezas]);
    }
    public function select($id)
    {
        $pieza = DB::table('piezas')->where('id_pieza', $id)->first();
        // console.log("gia");
        if (!$pieza) {
            return 'No se encontró la pieza con el ID proporcionado.';
        }
        return view('selects.pieza_select', ['pieza' => $pieza]);
        // return 'Saludos desde la funcion select id';
    }
    public function editar($id)
    {
        $pieza = DB::table('piezas')->where('id_pieza', $id)->first();
        if (!$pieza) {
            return 'No se encontró la pieza con el ID proporcionado.';
        }
        return view('formulariosc.piezas', ['pieza' => $pieza]);
        // return 'Saludos desde la funcion editar';
    }
    public function formulario()
    {
        return view('formulariosc.piezas');
        // return 'Saludos desde la funcion formulario';
    }
}
