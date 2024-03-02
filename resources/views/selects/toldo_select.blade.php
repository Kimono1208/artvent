@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
<div class="container-fluid py-4">
    <button class="bg-cover m-3 " ><a href="{{ route("toldos.create") }}">Añadir nuevo toldo</a></button>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Piezas</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <h2>Select</h2>
                <a href="{{ route("toldos.index") }}" class="btn btn-secondary">Regresar</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id_toldo</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medidas</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">color</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">imagen_toldo</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center" scope="row">{{ $toldo->id_toldo }}</th>
                        {{-- <td></td> --}}
                        <td class="text-center">{{ $toldo->nombre }}</td>
                        <td class="text-center">{{ $toldo->medidas }}</td>
                        <td class="text-center">{{ $toldo->color }}</td>
                        <td class="text-center">
                            <img src="{{ asset('storage/'.$imagen->datos_archivo) }}" alt="imagen" width="150">
                        </td>
                        <td class="text-center"><a href="{{ route("toldos.edit", ['id' => $toldo->id_toldo]) }}">Editar</a></td>
                        <td>
                            <form action="{{ route("toldos.delete", ['id' => $toldo->id_toldo]) }}" method="post">
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
