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
              <h2>Crear Pieza</h2>
              <a href="{{ route("piezas.index") }}" class="btn btn-secondary">Regresar</a>

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <form action="{{ route('piezas.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                  </div>
                  <div class="form-group">
                      <label for="medidas">Medidas</label>
                      <input type="text" class="form-control" id="medidas" name="medidas" value="{{ old('medidas') }}">
                  </div>
                  <div class="form-group">
                      <label for="exclusiva">Exclusiva</label>
                      <input type="text" class="form-control" id="exclusiva" name="exclusiva" value="{{ old('exclusiva') }}">
                  </div>
                  <div class="form-group">
                      <label for="combinacion">Combinación</label>
                      <input type="text" class="form-control" id="combinacion" name="combinacion" value="{{ old('combinacion') }}">
                  </div>
                  <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                  </div>
                  <div class="form-group">
                      <label for="cantidad">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ old('cantidad') }}">
                  </div>
                  <button type="submit" class="btn btn-primary">Guardar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection