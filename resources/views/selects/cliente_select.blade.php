@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
<div class="container-fluid py-4">
    <button class="bg-cover m-3 " ><a href="{{ route("clientes.create") }}">Añadir nueva cliente</a></button>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">clientes</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <h2>Select</h2>
                <a href="{{ route("clientes.index") }}" class="btn btn-secondary">Regresar</a>
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
                    <tr>
                        <th class="text-center" scope="row">{{ $cliente->id_cliente }}</th>
                        {{-- <td></td> --}}
                        <td class="text-center">{{ $cliente->nombre }}</td>
                        <td class="text-center">{{ $cliente->rfc }}</td>
                        <td class="text-center">{{ $cliente->phone }}</td>
                        <td class="text-center">{{ $cliente->direccion }}</td>
                        <td class="text-center">{{ $cliente->id_imagen_cliente }}</td>
                        <td class="text-center">{{ $cliente->email }}</td>
                        <td class="text-center">{{ $cliente->estatus }}</td>
                        <td class="text-center">{{ $cliente->adeudo }}</td>
                        <td class="text-center"><a href="{{ route("clientes.show", ['id' => $cliente->id_cliente]) }}">Ver mas</a></td>
                        <td>
                        <td class="text-center"><a href="{{ route("clientes.edit", ['id' => $cliente->id_cliente]) }}">Editar</a></td>
                        <td>
                            <form action="{{ route("clientes.delete", ['id' => $cliente->id_cliente]) }}" method="post">
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
