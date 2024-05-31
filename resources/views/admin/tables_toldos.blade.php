<!-- resources/views/admin/tables_toldos.blade.php -->

@extends('/plantilla/plantilla_adm')

@section('titulo', 'Lista de Toldos')

@section('contenido')
<div class="container-fluid py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <button class="bg-cover m-3 " ><a href="{{ route("toldos.create") }}">Añadir nuevo toldo</a></button>
    <div class="row">
      <div class="col-12">
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
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id_toldo</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medidas</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Imagen_id</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($toldos as $toldo)
                    <tr>
                      <td class="align-middle text-center">{{ $toldo->id }}</td>
                      <td class="align-middle text-center">{{ $toldo->nombre }}</td>
                      <td class="align-middle text-center">{{ $toldo->medidas }}</td>
                      <td class="align-middle text-center">{{ $toldo->color }}</td>
                      <td class="align-middle text-center">{{ $toldo->cantidad }}</td>
                      <td class="align-middle text-center">{{ $toldo->imagen_id }}</td>
                      <td class="align-middle text-center">
                        <a href="{{ route('toldos.edit', $toldo->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('toldos.destroy', $toldo->id) }}" method="POST" style="display:inline;">
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
