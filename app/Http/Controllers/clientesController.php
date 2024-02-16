<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class clientesController extends Controller
{
    public function guardar(Request $req)
    {
        // dd($req->all());
        $id_imagen_cliente = DB::table('imagenes')->insertGetId([
            'id_imagen' => $req->id_imagen_cliente,
            'nombre_archivo' => $req->nombre_archivo,
            'tipo_archivo' => $req->tipo_archivo,
            'datos_archivo' => $req->datos_archivo,
        ]);
        DB::table('clientes')->insert([
            'nombre' => $req->nombre,
            'rfc' => $req->rfc,
            'numero_telefono' => $req->numero_telefono,
            'direccion' => $req->direccion,
            // 'id_imagen_cliente' => $req->id_imagen_cliente,
            'email' => $req->estatus,
            'adeudo' => $req->adeudo
        ]);
        $clientes = DB::table('clientes')->get();
        return view("/admin/tables_clientes", ['clientes'=> $clientes], compact("id_imagen_cliente"));
        // return 'Saludos desde la funcion guardar';
    }
    public function actualizar(Request $req)
    {
        DB::table('clientes')->where('id_cliente', $req->id_cliente)->update([
            'nombre' => $req->nombre,
            'rfc' => $req->rfc,
            'numero_telefono' => $req->numero_telefono,
            'direccion' => $req->direccion,
            'id_imagen_cliente' => $req->id_imagen_cliente,
            'email' => $req->estatus,
            'adeudo' => $req->adeudo
        ]);
        $clientes = DB::table('clientes')->get();
        return to_route('clientes.index', ['clientes'=> $clientes]);
        // return view('/admin/tables', ['clientes'=> $clientes]);
        // return 'saludos desde la funcion actualizar';
    }
    public function borrar($id)
    {
        // $clientes = DB::table('clientes')->get();
        $clientes = DB::table('clientes')->get();
        DB::table('clientes')->where('id_cliente', $id)->delete();
        return view('/admin/tables_clientes', ['clientes'=> $clientes]);

        // return 'Hola desde la funcion borrar';
    }
    public function listado()
    {
        $clientes = DB::table('clientes')->get();
        return view('/admin/tables_clientes', ['clientes'=> $clientes]);
    }
    public function select($id)
    {
        $cliente = DB::table('clientes')->where('id_cliente', $id)->first();
        // console.log("gia");
        if (!$cliente) {
            return 'No se encontró la cliente con el ID proporcionado.';
        }
        return view('selects.cliente_select', ['cliente' => $cliente]);
        // return 'Saludos desde la funcion select id';
    }
    public function editar($id)
    {
        $cliente = DB::table('clientes')->where('id_cliente', $id)->first();
        if (!$cliente) {
            return 'No se encontró la cliente con el ID proporcionado.';
        }
        return view('formulariosc.clientes', ['cliente' => $cliente]);
        // return 'Saludos desde la funcion editar';
    }
    public function formulario()
    {
        return view('formulariosc.clientes');
        // return 'Saludos desde la funcion formulario';
    }
}
