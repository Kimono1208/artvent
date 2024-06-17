@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @vite(['resources/css/app.css'])

    <section class="container-fluid px-xs-12 px-sm-6 px-md-8 px-lg-12 ">
        <div class="contenedor">
            <h2 class="title">{{ isset($toldo) ? 'Actualizar' : 'Crear' }} Toldo</h2>
            {!! isset($toldo) ? '<b>Indice de toldo: </b>' . $toldo->id : '' !!}
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
        <form class="row g-4 needs-validation" novalidate method="POST"
        action="{{ isset($toldo) ? route('toldos.update', $toldo->id) : route('toldos.store') }}">
            @csrf
            @if (isset($toldo))
                @method('PUT')
            @endif

            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                    id="nombre" value="{{ old('nombre', isset($toldo) ? $toldo->nombre : '') }}" required>
                @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="ancho" class="form-label">Ancho</label>
                <input type="text" class="form-control @error('ancho') is-invalid @enderror" name="ancho"
                    id="ancho" value="{{ old('ancho', isset($toldo) ? $toldo->ancho : '') }}" required>
                @error('ancho')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="largo" class="form-label">Largo</label>
                <input type="text" class="form-control @error('largo') is-invalid @enderror" name="largo"
                    id="largo" value="{{ old('largo', isset($toldo) ? $toldo->largo : '') }}" required>
                @error('largo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="piezas" class="form-label">Piezas</label>
                <input type="text" class="form-control @error('piezas') is-invalid @enderror" name="piezas"
                    id="piezas" value="{{ old('piezas', isset($toldo) ? $toldo->piezas : '') }}" required>
                @error('piezas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="lona_m2" class="form-label">Lona m2</label>
                <input type="text" class="form-control @error('lona_m2') is-invalid @enderror" name="lona_m2"
                    id="lona_m2" value="{{ old('lona_m2', isset($toldo) ? $toldo->lona_m2 : '') }}" required>
                @error('lona_m2')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="luces" class="form-label">Luces</label>
                <input type="checkbox" class="form-check-input @error('luces') is-invalid @enderror" name="luces"
                    id="luces" {{ old('luces', isset($toldo) ? $toldo->luces : '') ? 'checked' : '' }}>
                @error('luces')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="conexiones" class="form-label">Conexiones</label>
                <input type="checkbox" class="form-check-input @error('conexiones') is-invalid @enderror" name="conexiones"
                    id="conexiones" {{ old('conexiones', isset($toldo) ? $toldo->conexiones : '') ? 'checked' : '' }}>
                @error('conexiones')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="mesas" class="form-label">Mesas</label>
                <input type="text" class="form-control @error('mesas') is-invalid @enderror" name="mesas"
                    id="mesas" value="{{ old('mesas', isset($toldo) ? $toldo->mesas : '') }}">
                @error('mesas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="sillas" class="form-label">Sillas</label>
                <input type="text" class="form-control @error('sillas') is-invalid @enderror" name="sillas"
                    id="sillas" value="{{ old('sillas', isset($toldo) ? $toldo->sillas : '') }}">
                @error('sillas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="tarimas" class="form-label">Tarimas</label>
                <input type="text" class="form-control @error('tarimas') is-invalid @enderror" name="tarimas"
                    id="tarimas" value="{{ old('tarimas', isset($toldo) ? $toldo->tarimas : '') }}">
                @error('tarimas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control @error('color') is-invalid @enderror" name="color"
                    id="color" value="{{ old('color', isset($toldo) ? $toldo->color : '') }}">
                @error('color')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="cortinas" class="form-label">Cortinas</label>
                <input type="checkbox" class="form-check-input @error('cortinas') is-invalid @enderror" name="cortinas"
                    id="cortinas" {{ old('cortinas', isset($toldo) ? $toldo->cortinas : '') ? 'checked' : '' }}>
                @error('cortinas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="decoracion_extra" class="form-label">Decoración Extra</label>
                <textarea class="form-control @error('decoracion_extra') is-invalid @enderror" name="decoracion_extra"
                    id="decoracion_extra">{{ old('decoracion_extra', isset($toldo) ? $toldo->decoracion_extra : '') }}</textarea>
                @error('decoracion_extra')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" name="status" id="status"
                    required>
                    <option value="disponible"
                        {{ old('status', isset($toldo) ? $toldo->status : '') == 'disponible' ? 'selected' : '' }}>
                        Disponible</option>
                    <option value="no_disponible"
                        {{ old('status', isset($toldo) ? $toldo->status : '') == 'no_disponible' ? 'selected' : '' }}>No
                        Disponible</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">¡Correcto!</div>
                @enderror
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">{{ isset($toldo) ? 'Actualizar' : 'Guardar' }}
                    Toldo</button>
                {!! isset($toldo)
                    ? '<a href="' . route('toldos.index') . '" class="btn btn-secondary">Cancelar</a>'
                    : '<a href="' . route('toldos.index') . '" class="btn btn-secondary">Regresar</a>' !!}
            </div>
        </form>
    </section>
    <script>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script src="{{ asset('../js/form.js') }}"></script>

@endsection
