<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiezasController extends Controller
{
    public function guardar(Request $req)
    {
        return 'Saludos desde la funcion guardar';
    }
    public function actualizar(Request $req)
    {
        return 'saludos desde la funcion actualizar';
    }
    public function borrar($id)
    {
        return 'Hola desde la funcion borrar';
    }
    public function listado()
    {
        return view('/admin/tables');
    }
    public function selectid($id)
    {
        return 'Saludos desde la funcion select id';
    }
    public function editar($id)
    {
        return 'Saludos desde la funcion editar';
    }
    public function formulario()
    {
        return 'Saludos desde la funcion formulario';
    }
}