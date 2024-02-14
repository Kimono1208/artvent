@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@vite(['resources/css/app.css'])

<section class="pepe container-fluid px-xs-12 px-sm-6 px-md-8 px-lg-12 ">
    <div class="contenedor">
        <h2 class="title">{{ isset($cliente) ? 'Actualizar' : '' }} clientes FORMULARIO</h2>
        {!! isset($cliente) ? '<b>Indice de cliente: </b>'.$cliente->id_cliente : '' !!}
    </div>
<form class="form_cont contenedor row g-4 needs-validation" novalidate method="POST" action="{{
    isset($cliente) ? route("clientes.update", ['id' => $cliente->id_cliente]) : route("clientes.store") }}">
    @csrf
    @if(isset($cliente))
    @method('PUT')
    <input type="hidden" name="id_cliente" value="{{ $cliente->id_cliente }}">
    @endif

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ isset($cliente) ? $cliente->nombre : '' }}" required>
    <div class="valid-feedback">
      ¡Correcto!
    </div>
  </div>
  <div class="col-md-4">
    <label for="rfc" class="form-label">RFC</label>
    <input type="text" class="form-control" name="rfc" id="rfc" value="{{ isset($cliente) ? $cliente->rfc : '' }}" required>
    <div class="invalid-feedback">
      Por favor, proporciona un RFC válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="numero_telefono" class="form-label">Número de Teléfono</label>
    <input type="text" class="form-control" name="telefono" id="numero_telefono" value="{{ isset($cliente) ? $cliente->numero_telefono : '' }}" required>
    <div class="invalid-feedback">
      Por favor, proporciona un número de teléfono válido.
    </div>
  </div>
  <div class="col-md-6">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" name="direccion" id="direccion" value="{{ isset($cliente) ? $cliente->direccion : '' }}" required>
    <div class="invalid-feedback">
      Por favor, proporciona una dirección válida.
    </div>
  </div>
  <div class="col-md-4">
    <label for="id_imagen_cliente" class="form-label">Imagen Cliente</label>
    <select class="form-select" id="id_imagen_cliente" name="id_imagen_cliente" required>
      <option selected disabled value="{{ isset($cliente) ? $cliente->id_imagen_cliente : '' }}">Selecciona una imagen</option>
      <option value="1">Imagen1</option>
      <option value="2">Imagen2</option>
      <!-- Agrega más opciones según sea necesario -->
    </select>
    <div class="invalid-feedback">
      Por favor, selecciona una imagen.
    </div>
  </div>
  <div class="col-md-4">
    <label for="email" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ isset($cliente) ? $cliente->email : '' }}" required>
    <div class="invalid-feedback">
      Por favor, proporciona un correo electrónico válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="estatus" class="form-label">Estatus</label>
    <input type="text" class="form-control" id="estatus" name="estatus" value="{{ isset($cliente) ? $cliente->estatus : '' }}" required>
    <div class="invalid-feedback">
      Por favor, proporciona un estatus válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="adeudo" class="form-label">Adeudo</label>
    <input type="text" class="form-control" name="adeudo" id="adeudo" value="{{ isset($cliente) ? $cliente->adeudo : '' }}" required>
    <div class="invalid-feedback">
      Por favor, proporciona un adeudo válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="id_usuario" class="form-label">ID Usuario</label>
    <select class="form-select" name="id_usuario" id="id_usuario" disabled>
      <option selected disabled value="{{ isset($cliente) ? $cliente->id_usuario : '' }}">Selecciona un usuario</option>
      <option value="1">Usuario1</option>
      <option value="2">Usuario2</option>
      <!-- Agrega más opciones según sea necesario -->
    </select>
    <div class="invalid-feedback">
      Por favor, selecciona un usuario.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">{{ isset($cliente) ? 'Actualizar' : 'Guardar' }} cliente</button>
    {!! isset($cliente) ? '<a href="' . route("clientes.index") . '" class="btn btn-secondary">Cancelar</a>' : '<a href="' . route("clientes.index") . '" class="btn btn-secondary">Regresar</a>' !!}
  </div>
</form>
</section>
<script src="{{ asset('../js/form.js') }} "></script>



@endsection
