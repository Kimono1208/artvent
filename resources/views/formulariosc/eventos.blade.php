@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@vite(['resources/css/app.css'])

<section class="pepe container-fluid px-xs-12 px-sm-6 px-md-8 px-lg-12 ">
    <div class="contenedor">
        <h2 class="title">{{ isset($evento) ? 'Actualizar' : '' }} eventos FORMULARIO</h2>
        {!! isset($evento) ? '<b>Indice de evento: </b>'.$evento->id_evento : '' !!}
    </div>
    <form class="form_cont contenedor row g-4 needs-validation" novalidate method="POST" action="{{
        isset($evento) ? route("eventos.update", ['id' => $evento->id_evento]) : route("eventos.store") }}">
            @csrf
            @if(isset($evento))
            @method('PUT')
            <input type="hidden" name="id_evento" value="{{ $evento->id_evento }}">
            @endif
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ isset($evento) ? $evento->nombre : '' }}" required>
            <div class="valid-feedback">
                ¡Correcto!
            </div>
        </div>
        <div class="col-md-4">
            <label for="lugar" class="form-label">Lugar</label>
            <input type="text" class="form-control" name="lugar" id="lugar" value="{{ isset($evento) ? $evento->lugar : '' }}" required>
            <div class="valid-feedback">
                ¡Correcto!
            </div>
        </div>
        <div class="col-md-4">
            <label for="toldo" class="form-label">Toldo</label>
            <input type="text" class="form-control" name="toldo" id="toldo" value="{{ isset($evento) ? $evento->toldo : '' }}" required>
            <div class="invalid-feedback">
                Por favor, proporciona información sobre el toldo.
            </div>
        </div>
        <div class="col-md-4">
            <label for="cliente" class="form-label">Cliente</label>
            <input type="text" class="form-control" name="cliente" id="cliente" value="{{ isset($evento) ? $evento->cliente ?? '' : '' }}" disabled>
            <div class="invalid-feedback">
                Por favor, proporciona información sobre el cliente.
            </div>
        </div>
        <div class="col-md-4">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" value="{{ isset($evento) ? $evento->precio : '' }}" required>
            <div class="invalid-feedback">
                Por favor, proporciona un precio válido.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">{{ isset($evento) ? 'Actualizar' : 'Guardar' }} evento</button>
            {!! isset($evento) ? '<a href="' . route("eventos.index") . '" class="btn btn-secondary">Cancelar</a>' : '<a href="' . route("eventos.index") . '" class="btn btn-secondary">Regresar</a>' !!}
        </div>
    </form>
    <script src="{{ asset('../js/form.js') }} "></script>

@endsection
