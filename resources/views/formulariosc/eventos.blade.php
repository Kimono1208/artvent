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
            <input type="text" class="form-control" id="nombre" value="" required>
            <div class="valid-feedback">
                ¡Correcto!
            </div>
        </div>
        <div class="col-md-4">
            <label for="lugar" class="form-label">Lugar</label>
            <input type="text" class="form-control" id="lugar" value="" required>
            <div class="valid-feedback">
                ¡Correcto!
            </div>
        </div>
        <div class="col-md-4">
            <label for="toldo" class="form-label">Toldo</label>
            <input type="text" class="form-control" id="toldo" value="" required>
            <div class="invalid-feedback">
                Por favor, proporciona información sobre el toldo.
            </div>
        </div>
        <div class="col-md-4">
            <label for="cliente" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="cliente" value="" required>
            <div class="invalid-feedback">
                Por favor, proporciona información sobre el cliente.
            </div>
        </div>
        <div class="col-md-4">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" required>
            <div class="invalid-feedback">
                Por favor, proporciona un precio válido.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar formulario</button>
        </div>
    </form>
    <script src="../js/form.js"></script>

@endsection
