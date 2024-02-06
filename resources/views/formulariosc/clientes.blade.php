@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" value="" required>
    <div class="valid-feedback">
      ¡Correcto!
    </div>
  </div>
  <div class="col-md-4">
    <label for="rfc" class="form-label">RFC</label>
    <input type="text" class="form-control" id="rfc" value="" required>
    <div class="invalid-feedback">
      Por favor, proporciona un RFC válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="numero_telefono" class="form-label">Número de Teléfono</label>
    <input type="text" class="form-control" id="numero_telefono" value="" required>
    <div class="invalid-feedback">
      Por favor, proporciona un número de teléfono válido.
    </div>
  </div>
  <div class="col-md-6">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" required>
    <div class="invalid-feedback">
      Por favor, proporciona una dirección válida.
    </div>
  </div>
  <div class="col-md-4">
    <label for="id_imagen_cliente" class="form-label">Imagen Cliente</label>
    <select class="form-select" id="id_imagen_cliente" required>
      <option selected disabled value="">Selecciona una imagen</option>
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
    <input type="email" class="form-control" id="email" required>
    <div class="invalid-feedback">
      Por favor, proporciona un correo electrónico válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="estatus" class="form-label">Estatus</label>
    <input type="text" class="form-control" id="estatus" value="" required>
    <div class="invalid-feedback">
      Por favor, proporciona un estatus válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="adeudo" class="form-label">Adeudo</label>
    <input type="text" class="form-control" id="adeudo" value="" required>
    <div class="invalid-feedback">
      Por favor, proporciona un adeudo válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="id_usuario" class="form-label">ID Usuario</label>
    <select class="form-select" id="id_usuario" required>
      <option selected disabled value="">Selecciona un usuario</option>
      <option value="1">Usuario1</option>
      <option value="2">Usuario2</option>
      <!-- Agrega más opciones según sea necesario -->
    </select>
    <div class="invalid-feedback">
      Por favor, selecciona un usuario.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar formulario</button>
  </div>
</form>
<script src="../js/form.js"></script>

  
@endsection