@extends('/plantilla/plantilla_adm')

@section('titulo')

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="" required>
            <div class="valid-feedback">
                ¡Correcto!
            </div>
        </div>
        <div class="col-md-4">
            <label for="medidas" class="form-label">Medidas</label>
            <input type="text" class="form-control" name="medidas" id="medidas" value="" required>
            <div class="valid-feedback">
                ¡Correcto!
            </div>
        </div>
        <div class="col-md-4">
            <label for="exclusiva" class="form-label">Exclusiva</label>
            <input type="text" class="form-control" name="exclusiva" id="exclusiva" value="" required>
            <div class="invalid-feedback">
                Por favor, proporciona información.
            </div>
        </div>
        <div class="col-md-6">
            <label for="combinacion" class="form-label">Combinación</label>
            <input type="text" class="form-control" name="combinacion" id="combinacion" value="" required>
            <div class="invalid-feedback">
                Por favor, proporciona información válida.
            </div>
        </div>
        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" required>
            <div class="invalid-feedback">
                Por favor, proporciona una descripción.
            </div>
        </div>
        <div class="col-md-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" id="cantidad" required>
            <div class="invalid-feedback">
                Por favor, proporciona una cantidad válida.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar formulario</button>
        </div>
    </form>
    <script src="{{ asset('../js/form.js') }} "></script>


@endsection
