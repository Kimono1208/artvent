@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
    <div class="container-fluid py-4">
        <button class="bg-cover m-3 "><a href="{{ route('cotizaciones.create') }}">Añadir nueva cotizacion</a></button>
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">cotizaciones</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <h2>Select</h2>
                            <a href="{{ route('cotizaciones.index') }}" class="btn btn-secondary">Regresar</a>
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ancho</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Largo</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            tipo</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Cantidad Personas</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Luces</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Conexiones</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Mesas</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Sillas</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tarimas</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Color</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Cortinas</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Decoración Extra</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            fecha_inicio</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            fecha_final</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            lugar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            notas_extras</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            status</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                        {{-- <td class="text-center"><a href="{{ route('cotizaciones.edit', $cotizacion->id) }}" class="btn btn-info">Editar</a></td> --}}
                                        {{--                         <td>
                            <form action="{{ route("cotizaciones.delete", ['id' => $cotizacion->id_evento]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td> --}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h2>Seguimiento de la cotizacion</h2>
                        <h4>Comentarios</h4>
                        <form action="/admin/cotizaciones/{{ $cotizacion->id }}/comments" method="POST">
                            @csrf
                            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                            <hr>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </form>
                        <a href="/admin/cotizaciones/{{ $cotizacion->id }}/edit" class="btn btn-secondary">Cancelar</a>
                        <hr>
                        
                        @foreach($cotizacion->comments as $comment)
                            <div class="m-4 p-4 bg-secondary text-white">
                                <div class="bg-danger p-2 rounded m-4 text-center">Mensaje: {{ $comment->id }}</div>
                                <h6>User: {{ $comment->user->name }}</h6>
                                <p>Comentario: {{ $comment->comment }}</p>
                            </div>
                        @endforeach                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
