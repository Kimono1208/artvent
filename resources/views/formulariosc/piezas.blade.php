@extends('plantilla.plantilla_adm')

@section('titulo', 'Formulario de Piezas')

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <section class="container-fluid">
        <div class="contenedor">
            <h2>{{ isset($pieza) ? 'Actualizar' : 'Crear' }} Pieza</h2>
            {!! isset($pieza) ? '<b>Indice de Pieza: </b>' . $pieza->id : '' !!}
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
            action="{{ isset($pieza) ? route('piezas.update', $pieza->id) : route('piezas.store') }}">
            @csrf
            @if (isset($pieza))
                @method('PUT')
            @endif

            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                    value="{{ old('nombre', $pieza->nombre ?? '') }}" required>
                <div class="invalid-feedback">Por favor, proporciona el nombre.</div>
            </div>

            <div class="col-md-4">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" id="cantidad"
                    value="{{ old('cantidad', $pieza->cantidad ?? '') }}" required>
                <div class="invalid-feedback">Por favor, proporciona la cantidad.</div>
            </div>

            <div class="col-md-4">
                <label for="ancho" class="form-label">Ancho</label>
                <input type="number" step="0.01" class="form-control" name="ancho" id="ancho"
                    value="{{ old('ancho', $pieza->ancho ?? '') }}" required>
                <div class="invalid-feedback">Por favor, proporciona el ancho.</div>
            </div>

            <div class="col-md-4">
                <label for="largo" class="form-label">Largo</label>
                <input type="number" step="0.01" class="form-control" name="largo" id="largo"
                    value="{{ old('largo', $pieza->largo ?? '') }}" required>
                <div class="invalid-feedback">Por favor, proporciona el largo.</div>
            </div>

            <div class="col-md-4">
                <label for="unicas" class="form-label">Unicas</label>
                <select class="form-control" name="unicas" id="unicas" required>
                    <option value="1" {{ old('unicas', $pieza->unicas ?? '') == '1' ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ old('unicas', $pieza->unicas ?? '') == '0' ? 'selected' : '' }}>No</option>
                </select>
                <div class="invalid-feedback">Por favor, selecciona si es única.</div>
            </div>

            <div class="col-md-4">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status" id="status" required>
                    <option value="disponible"
                        {{ old('status', $pieza->status ?? '') == 'disponible' ? 'selected' : '' }}>Disponible</option>
                    <option value="no_disponible"
                        {{ old('status', $pieza->status ?? '') == 'no_disponible' ? 'selected' : '' }}>No disponible
                    </option>
                </select>
                <div class="invalid-feedback">Por favor, selecciona el estado.</div>
            </div>

            <div class="col-md-12">
                <label for="observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" name="observaciones" id="observaciones">{{ old('observaciones', $pieza->observaciones ?? '') }}</textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">{{ isset($pieza) ? 'Actualizar' : 'Guardar' }}
                    Pieza</button>
                <a href="{{ route('piezas.index') }}" class="btn btn-secondary">Cancelar</a>
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
@endsection
