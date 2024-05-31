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
        <h2 class="title">{{ isset($toldo) ? 'Actualizar' : '' }} toldos FORMULARIO</h2>
        {!! isset($toldo) ? '<b>Indice de toldo: </b>'.$toldo->id_toldo : '' !!}
    </div>
    <form enctype="multipart/form-data" class="form_cont contenedor row g-4 needs-validation" novalidate method="POST" action="{{
        isset($toldo) ? route('toldos.update', ['id' => $toldo->id_toldo]) : route('toldos.store') }}">
        @csrf
        @if(isset($toldo))
            @method('PUT')
            <input type="hidden" name="id_toldo" value="{{ $toldo->id_toldo }}">
        @endif
    
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre', isset($toldo) ? $toldo->nombre : '') }}" required>
            @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>
    
        <div class="col-md-4">
            <label for="medidas" class="form-label">Medidas</label>
            <input type="text" class="form-control @error('medidas') is-invalid @enderror" name="medidas" id="medidas" value="{{ old('medidas', isset($toldo) ? $toldo->medidas : '') }}" required>
            @error('medidas')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control @error('cantidad') is-invalid @enderror" name="cantidad" id="cantidad" value="{{ old('cantidad', isset($toldo) ? $toldo->cantidad : '') }}" required>
            @error('cantidad')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>
    
        <div class="col-md-4">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control @error('color') is-invalid @enderror" name="color" id="color" value="{{ old('color', isset($toldo) ? $toldo->color : '') }}" required>
            @error('color')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>
    
        <div class="col-md-6">
            <label for="id_imagen_toldo" class="form-label">Imagen</label>
            <input type="file" class="form-control @error('id_imagen_toldo') is-invalid @enderror" name="id_imagen_toldo" accept="image/*" id="id_imagen_toldo" value="{{ old('id_imagen_toldo', isset($toldo) ? $toldo->id_imagen_toldo : '') }}" @if(!isset($toldo)) required @endif>
            @error('id_imagen_toldo')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>
    
        <div class="col-12">
            <button class="btn btn-primary" type="submit">{{ isset($toldo) ? 'Actualizar' : 'Guardar' }} toldo</button>
            {!! isset($toldo) ? '<a href="' . route('toldos.index') . '" class="btn btn-secondary">Cancelar</a>' : '<a href="' . route('toldos.index') . '" class="btn btn-secondary">Regresar</a>' !!}
        </div>
    </form>
    
</section>
    <script src="{{ asset('../js/form.js') }} "></script>


@endsection
