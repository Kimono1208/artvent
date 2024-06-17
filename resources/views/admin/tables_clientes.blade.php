@extends('plantilla.plantilla_adm')

@section('titulo', 'Lista de Clientes')

@section('contenido')
<div class="container-fluid py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Añadir nuevo cliente</a>
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Clientes</h6>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center">Id Cliente</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">RFC</th>
                            <th class="text-center">Teléfono</th>
                            <th class="text-center">Dirección</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Estatus</th>
                            <th class="text-center">Adeudo</th>
                            <th class="text-center">Imagen</th> <!-- Agrega la columna de la imagen -->
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td class="text-center">{{ $cliente->id }}</td>
                            <td class="text-center">{{ $cliente->nombre }}</td>
                            <td class="text-center">{{ $cliente->rfc }}</td>
                            <td class="text-center">{{ $cliente->phone }}</td>
                            <td class="text-center">{{ $cliente->direccion }}</td>
                            <td class="text-center">{{ $cliente->email }}</td>
                            <td class="text-center">{{ $cliente->estatus }}</td>
                            <td class="text-center">{{ $cliente->adeudo }}</td>
                            <td class="text-center">
                                @if ($cliente->imagen)
                                    <img src="{{ asset('storage/' . $cliente->imagen->ruta) }}" alt="Imagen Cliente" class="img-fluid" style="max-width: 100px;">
                                @else
                                    <img src="{{ asset('storage/imagenes_clientes/Default.png') }}" alt="Imagen por defecto" class="img-fluid" style="max-width: 100px;">
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
