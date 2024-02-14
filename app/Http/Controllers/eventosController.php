<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class eventosController extends Controller
{
    public function guardar(Request $req)
    {
        // dd($req->all());
        DB::table('eventos')->insert([
            'nombre' => $req->nombre,
            'lugar' => $req->lugar,
            'toldo' => $req->toldo,
            'precio' => $req->precio,
        ]);
        $eventos = DB::table('eventos')->get();
        return view("/admin/tables_eventos", ['eventos'=> $eventos]);
        // return 'Saludos desde la funcion guardar';
    }
    public function actualizar(Request $req)
    {
        DB::table('eventos')->where('id_evento', $req->id_evento)->update([
            'nombre' => $req->nombre,
            'lugar' => $req->lugar,
            'toldo' => $req->toldo,
            'precio' => $req->precio,
        ]);
        $eventos = DB::table('eventos')->get();
        return to_route('eventos.index', ['eventos'=> $eventos]);
        // return view('/admin/tables', ['eventos'=> $eventos]);
        // return 'saludos desde la funcion actualizar';
    }
    public function borrar($id)
    {
        // $eventos = DB::table('eventos')->get();
        $eventos = DB::table('eventos')->get();
        DB::table('eventos')->where('id_evento', $id)->delete();
        return redirect('/admin/tables_eventos', ['eventos'=> $eventos]);

        // return 'Hola desde la funcion borrar';
    }
    public function listado()
    {
        $eventos = DB::table('eventos')->get();
        return view('/admin/tables_eventos', ['eventos'=> $eventos]);
    }
    public function select($id)
    {
        $evento = DB::table('eventos')->where('id_evento', $id)->first();
        // console.log("gia");
        if (!$evento) {
            return 'No se encontró la evento con el ID proporcionado.';
        }
        return view('selects.evento_select', ['evento' => $evento]);
        // return 'Saludos desde la funcion select id';
    }
    public function editar($id)
    {
        $evento = DB::table('eventos')->where('id_evento', $id)->first();
        if (!$evento) {
            return 'No se encontró la evento con el ID proporcionado.';
        }
        return view('formulariosc.eventos', ['evento' => $evento]);
        // return 'Saludos desde la funcion editar';
    }
    public function formulario()
    {
        return view('formulariosc.eventos');
        // return 'Saludos desde la funcion formulario';
    }
}
