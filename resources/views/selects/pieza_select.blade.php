@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
<div class="container-fluid py-4">
    <button class="bg-cover m-3 " ><a href="{{ route("piezas.create") }}">Añadir nueva pieza</a></button>
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
<a href="{{ route("piezas.index") }}" class="btn btn-secondary">Regresar</a>
<table class="table align-items-center mb-0">
    <thead>
      <tr>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id_cliente</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medidas</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Exclusiva</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Combinacion</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripcion</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad</th>

        <th class="text-secondary opacity-7"></th>
      </tr>
    </thead>
<tbody>
    {{-- @foreach ($pieza as $pieza) --}}
    <tr>
        <th class="text-center" scope="row">{{ $pieza->id_pieza }}</th>
        {{-- <td></td> --}}
        <td class="text-center">{{ $pieza->nombre }}</td>
        <td class="text-center">{{ $pieza->medidas }}</td>
        <td class="text-center">{{ $pieza->exclusiva }}</td>
        <td class="text-center">{{ $pieza->combinacion }}</td>
        <td class="text-center">{{ $pieza->descripcion }}</td>
        <td class="text-center">{{ $pieza->cantidad }}</td>
        <td class="text-center"><a href="{{ route("piezas.edit", ['id' => $pieza->id_pieza]) }}">Editar</a></td>
        <td>
            <form action="{{ route("piezas.delete", ['id' => $pieza->id_pieza]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    {{-- @endforeach --}}
</tbody>
</table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
