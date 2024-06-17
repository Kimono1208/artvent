@extends('plantilla.plantilla_adm')

@section('titulo', isset($cliente) ? 'Actualizar cliente' : 'Agregar cliente')

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <section class="pepe container-fluid px-xs-12 px-sm-6 px-md-8 px-lg-12">
        <div class="contenedor">
            <h2 class="title">{{ isset($cliente) ? 'Actualizar' : 'Agregar' }} cliente</h2>
            @if (isset($cliente))
                <p><b>Indice de cliente:</b> {{ $cliente->id_cliente }}</p>
            @endif
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form_cont contenedor row g-4 needs-validation" novalidate method="POST"
            action="{{ isset($cliente) ? route('clientes.update', ['cliente' => $cliente->id]) : route('clientes.store') }}" enctype="multipart/form-data">
            @csrf
            @if (isset($cliente))
                @method('PUT')
            @endif

            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                    value="{{ old('nombre', isset($cliente) ? $cliente->nombre : '') }}" required>
                <div class="valid-feedback">
                    ¡Correcto!
                </div>
            </div>

            <div class="col-md-4">
                <label for="rfc" class="form-label">RFC</label>
                <input type="text" class="form-control" name="rfc" id="rfc"
                    value="{{ old('rfc', isset($cliente) ? $cliente->rfc : '') }}" required>
                <div class="invalid-feedback">
                    Por favor, proporciona un RFC válido.
                </div>
            </div>

            <div class="col-md-4">
                <label for="phone" class="form-label">Número de Teléfono</label>
                <input type="text" class="form-control" name="phone" id="phone"
                    value="{{ old('phone', isset($cliente) ? $cliente->phone : '') }}" required>
                <div class="invalid-feedback">
                    Por favor, proporciona un número de teléfono válido.
                </div>
            </div>

            <div class="col-md-6">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion"
                    value="{{ old('direccion', isset($cliente) ? $cliente->direccion : '') }}" required>
                <div class="invalid-feedback">
                    Por favor, proporciona una dirección válida.
                </div>
            </div>

            <div class="col-md-4">
                <label for="imagen" class="form-label">Imagen Cliente</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*"
                    {{-- {{ isset($cliente) ? '' : 'required' }} --}}>
                @if (isset($cliente) && $cliente->imagen_cliente)
                    <img src="{{ asset('storage/' . $cliente->imagen_cliente) }}" alt="Imagen Cliente"
                        style="max-width: 100px; max-height: 100px;">
                @endif
                <div class="invalid-feedback">
                    Por favor, selecciona una imagen.
                </div>
            </div>


            <div class="col-md-4">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" name="email" id="email"
                    value="{{ old('email', isset($cliente) ? $cliente->email : '') }}" required>
                <div class="invalid-feedback">
                    Por favor, proporciona un correo electrónico válido.
                </div>
            </div>

            <div class="col-md-4">
                <label for="estatus" class="form-label">Estatus</label>
                <select class="form-select" id="estatus" name="estatus" required>
                    <option value="activo"
                        {{ old('estatus', isset($cliente) && $cliente->estatus === 'activo' ? 'selected' : '') }}>Activo
                    </option>
                    <option value="inactivo"
                        {{ old('estatus', isset($cliente) && $cliente->estatus === 'inactivo' ? 'selected' : '') }}>
                        Inactivo</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, selecciona un estatus.
                </div>
            </div>


            <div class="col-md-4">
                <label for="adeudo" class="form-label">Adeudo</label>
                <input type="text" class="form-control" name="adeudo" id="adeudo"
                    value="{{ old('adeudo', isset($cliente) ? $cliente->adeudo : '') }}" required>
                <div class="invalid-feedback">
                    Por favor, proporciona un adeudo válido.
                </div>
            </div>

            {{-- <div class="col-md-4">
                <label for="id_usuario" class="form-label">ID Usuario</label>
                <select class="form-select" name="user_id" id="id_usuario">
                    <option selected disabled>Selecciona un usuario</option>
                    <option value="1" {{ old('user_id', isset($cliente) ? $cliente->user_id : '') == 1 ? 'selected' : '' }}>Usuario1</option>
                    <option value="2" {{ old('user_id', isset($cliente) ? $cliente->user_id : '') == 2 ? 'selected' : '' }}>Usuario2</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
                <div class="invalid-feedback">
                    Por favor, selecciona un usuario.
                </div>
            </div> --}}

            <div class="col-12">
                <button class="btn btn-primary" type="submit">{{ isset($cliente) ? 'Actualizar' : 'Guardar' }}
                    cliente</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </section>

    <script src="{{ asset('js/form.js') }}"></script>
@endsection
