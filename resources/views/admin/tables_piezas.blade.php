@extends('/plantilla/plantilla_adm')

@section('titulo', 'Lista de Piezas')

@section('contenido')
<div class="container-fluid py-4">
    <button class="bg-cover m-3"><a href="{{ route('piezas.create') }}">Añadir nueva pieza</a></button>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Piezas</h6>
                    </div>
                    <form class="d-flex align-items-center justify-center">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ancho</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Largo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unicas</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Observaciones</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($piezas as $pieza)
                                    <tr>
                                        <td class="text-center">{{ $pieza->id }}</td>
                                        <td class="text-center">{{ $pieza->nombre }}</td>
                                        <td class="text-center">{{ $pieza->cantidad }}</td>
                                        <td class="text-center">{{ $pieza->ancho }}</td>
                                        <td class="text-center">{{ $pieza->largo }}</td>
                                        <td class="text-center">{{ $pieza->unicas ? 'Sí' : 'No' }}</td>
                                        <td class="text-center">{{ $pieza->observaciones }}</td>
                                        <td class="text-center">{{ $pieza->status }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('piezas.show', $pieza->id) }}" class="btn btn-info">Ver más</a>
                                            <a href="{{ route('piezas.edit', $pieza->id) }}" class="btn btn-warning">Editar</a>
                                            <form action="{{ route('piezas.destroy', $pieza->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
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
    </div>
</div>
@endsection
