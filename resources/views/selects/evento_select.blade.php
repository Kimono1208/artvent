@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
<div class="container-fluid py-4">
    <button class="bg-cover m-3 " ><a href="{{ route("eventos.create") }}">Añadir nueva evento</a></button>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">eventos</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <h2>Select</h2>
                <a href="{{ route("eventos.index") }}" class="btn btn-secondary">Regresar</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id_evento</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lugar</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Toldo</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Precio</th>

                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center" scope="row">{{ $evento->id_evento }}</th>
                        {{-- <td></td> --}}
                        <td class="text-center">{{ $evento->nombre }}</td>
                        <td class="text-center">{{ $evento->lugar }}</td>
                        <td class="text-center">{{ $evento->toldo }}</td>
                        <td class="text-center">{{ $evento->precio }}</td>
                        <td class="text-center"><a href="{{ route("eventos.edit", ['id' => $evento->id_evento]) }}">Editar</a></td>
                        <td>
                            <form action="{{ route("eventos.delete", ['id' => $evento->id_evento]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
