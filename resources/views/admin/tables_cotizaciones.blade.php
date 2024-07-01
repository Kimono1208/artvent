<!-- resources/views/admin/tables_cotizacions.blade.php -->

@extends('plantilla.plantilla_adm')

@section('titulo', 'Lista de cotizaciones')

@section('contenido')
<div class="container-fluid py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('cotizaciones.create') }}" class="btn btn-primary mb-3">Añadir nuevo cotizacion</a>
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">cotizaciones</h6>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ancho</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Largo</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tipo</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad Personas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Luces</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Conexiones</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mesas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sillas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tarimas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cortinas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decoración Extra</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fecha_inicio</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fecha_final</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">lugar</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">notas_extras</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cotizaciones as $cotizacion)
                        <tr>
                            <td class="align-middle text-center">{{ $cotizacion->id }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->ancho }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->largo }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->tipo }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->cantidad_personas }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->luces }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->conexiones }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->mesas }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->sillas }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->tarimas }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->color }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->cortinas }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->decoracion_extra }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->fecha_inicio }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->fecha_final }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->lugar }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->notas_extras }}</td>
                            <td class="align-middle text-center">{{ $cotizacion->status }}</td>
                            <td class="align-middle text-center">
                                <a href="{{ route('cotizaciones.show', $cotizacion->id) }}" class="btn btn-info">Ver más</a>
{{--                                 <a href="{{ route('cotizaciones.edit', $cotizacion->id) }}" class="btn btn-warning">Editar</a> --}}
                                <form action="{{ route('cotizaciones.destroy', $cotizacion->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancelar</button>
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
