<!-- resources/views/admin/tables_toldos.blade.php -->

@extends('plantilla.plantilla_adm')

@section('titulo', 'Lista de Toldos')

@section('contenido')
<div class="container-fluid py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('toldos.create') }}" class="btn btn-primary mb-3">Añadir nuevo toldo</a>
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Toldos</h6>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ancho</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Largo</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Piezas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lona m2</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Luces</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Conexiones</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mesas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sillas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tarimas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cortinas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decoración Extra</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($toldos as $toldo)
                        <tr>
                            <td class="align-middle text-center">{{ $toldo->id }}</td>
                            <td class="align-middle text-center">{{ $toldo->nombre }}</td>
                            <td class="align-middle text-center">{{ $toldo->ancho }}</td>
                            <td class="align-middle text-center">{{ $toldo->largo }}</td>
                            <td class="align-middle text-center">{{ $toldo->piezas }}</td>
                            <td class="align-middle text-center">{{ $toldo->lona_m2 }}</td>
                            <td class="align-middle text-center">{{ $toldo->luces ? 'Sí' : 'No' }}</td>
                            <td class="align-middle text-center">{{ $toldo->conexiones ? 'Sí' : 'No' }}</td>
                            <td class="align-middle text-center">{{ $toldo->mesas }}</td>
                            <td class="align-middle text-center">{{ $toldo->sillas }}</td>
                            <td class="align-middle text-center">{{ $toldo->tarimas }}</td>
                            <td class="align-middle text-center">{{ $toldo->color ?: '-' }}</td>
                            <td class="align-middle text-center">{{ $toldo->cortinas ? 'Sí' : 'No' }}</td>
                            <td class="align-middle text-center">{{ $toldo->decoracion_extra ?: '-' }}</td>
                            <td class="align-middle text-center">{{ $toldo->status }}</td>
                            <td class="align-middle text-center">
                                <a href="{{ route('toldos.edit', $toldo->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('toldos.destroy', $toldo->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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
