@extends('plantilla.plantilla_adm')

@section('titulo', isset($toldo) ? 'Actualizar toldo' : 'Agregar toldo')

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <section class="pepe container-fluid px-xs-12 px-sm-6 px-md-8 px-lg-12">
        <div class="contenedor">
            <h2 class="title">{{ isset($toldo) ? 'Actualizar' : 'Agregar' }} toldo</h2>
            @if (isset($toldo))
                <p><b>Indice de toldo:</b>{{--  {{ $toldo->id }} --}}</p>
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
            action="{{ /* isset($toldo) ? route('galeria_toldos.update', ['toldo' => $toldo->id]) : */ route('galeria_toldos.store') }}" enctype="multipart/form-data">
            @csrf
            @if (isset($toldo))
                @method('PUT')
            @endif

            <div class="col-md-4">
                <label for="nombre_toldo" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre_toldo" id="nombre_toldo"
                    value="{{ old('nombre_toldo', isset($toldo) ? $toldo->nombre_toldo : '') }}" required>
                <div class="valid-feedback">
                    ¡Correcto!
                </div>
            </div>

            <div class="col-md-4">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion"
                    value="{{ old('descripcion', isset($toldo) ? $toldo->descripcion : '') }}" required>
                <div class="invalid-feedback">
                    Por favor, proporciona un descripcion válido.
                </div>
            </div>

            <div class="col-md-4">
                <label for="precio" class="form-label">precio</label>
                <input type="number" class="form-control" name="precio" id="precio"
                    value="{{ old('precio', isset($toldo) ? $toldo->precio : '') }}" required>
                <div class="invalid-feedback">
                    Por favor, proporciona un precio válido.
                </div>
            </div>

            <div class="col-md-6">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria"
                    value="{{ old('categoria', isset($toldo) ? $toldo->categoria : '') }}" required>
                <div class="invalid-feedback">
                    Por favor, proporciona una categoria válida.
                </div>
            </div>

            <div class="col-md-4">
                <label for="imagen" class="form-label">Imagen Toldo</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*"
                    {{-- {{ isset($toldo) ? '' : 'required' }} --}}>
                @if (isset($toldo) && $toldo->imagen)
                    <img src="{{ asset('storage/' . $toldo->imagen) }}" alt="Imagen Toldo"
                        style="max-width: 100px; max-height: 100px;">
                @endif
                <div class="invalid-feedback">
                    Por favor, selecciona una imagen.
                </div>
            </div>

{{--             <div class="col-md-4">
                <label for="estatus" class="form-label">Estatus</label>
                <select class="form-select" id="estatus" name="estatus" required>
                    <option value="activo"
                        {{ old('estatus', isset($toldo) && $toldo->estatus === 'activo' ? 'selected' : '') }}>Activo
                    </option>
                    <option value="inactivo"
                        {{ old('estatus', isset($toldo) && $toldo->estatus === 'inactivo' ? 'selected' : '') }}>
                        Inactivo</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, selecciona un estatus.
                </div>
            </div> --}}

            <div class="col-12">
                <button class="btn btn-primary" type="submit">{{ isset($toldo) ? 'Actualizar' : 'Guardar' }}
                    toldo</button>
                <a href="{{ route('galeria_toldos.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </section>

    <script src="{{ asset('js/form.js') }}"></script>
@endsection
