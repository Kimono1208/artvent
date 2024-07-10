@extends('plantilla.plantilla_adm')

@section('titulo', 'Lista de Clientes')

@section('contenido')
<div class="container-fluid py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('galeria_toldos.create') }}" class="btn btn-primary mb-3">Añadir nuevo toldo Publico</a>
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Toldos Publicos</h6>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center">Id Toldo</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">descripcion</th>
                            <th class="text-center">precio</th>
                            <th class="text-center">categoria</th>
                            <th class="text-center">imagen</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeriaToldos as $toldo)
                        <tr>
                            <td class="text-center">{{ $toldo->id }}</td>
                            <td class="text-center">{{ $toldo->nombre_toldo }}</td>
                            <td class="text-center">{{ $toldo->descripcion }}</td>
                            <td class="text-center">{{ $toldo->precio }}</td>
                            <td class="text-center">{{ $toldo->categoria }}</td>
                            <td class="text-center">
                                @if ($toldo->imagen)
                                    <img src="{{ asset('storage/'.$toldo->imagen) }}" alt="Imagen Toldo" class="img-fluid" style="max-width: 100px;">
                                @else
                                    <img src="{{ asset('storage/imagenes_clientes/Default.png') }}" alt="Imagen por defecto" class="img-fluid" style="max-width: 100px;">
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('galeria_toldos.show', $toldo->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('galeria_toldos.edit', $toldo->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('galeria_toldos.destroy', $toldo->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este toldo?')">Eliminar</button>
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
