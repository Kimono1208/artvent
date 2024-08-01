<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cotización #{{ $cotizacion->id }}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #b3ecbd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #41b150;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Artevnt</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Cotización Id: #{{ $cotizacion->id }}</span> <br>
                    <span>Fecha: {{ date('d / m / Y') }}</span> <br>
                    <span>Código postal: 63070</span> <br>
                    <span>Dirección: Calzada Jose Guadalupe Gallo #2601 </span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Detalles de la cotización</th>
                <th width="50%" colspan="2">Detalles del cliente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cotización Id:</td>
                <td>{{ $cotizacion->id }}</td>
            </tr>
            <tr>
                <td>Ancho:</td>
                <td>{{ $cotizacion->ancho }}</td>
            </tr>
            <tr>
                <td>Largo:</td>
                <td>{{ $cotizacion->largo }}</td>
            </tr>
            <tr>
                <td>Tipo:</td>
                <td>{{ $cotizacion->tipo }}</td>
            </tr>
            <tr>
                <td>Cantidad de personas:</td>
                <td>{{ $cotizacion->cantidad_personas }}</td>
            </tr>
            <tr>
                <td>Lugar:</td>
                <td>{{ $cotizacion->lugar }}</td>
            </tr>
            <tr>
                <td>Luces:</td>
                <td>{{ $cotizacion->luces ? 'Sí' : 'No' }}</td>
            </tr>
            <tr>
                <td>Conexiones:</td>
                <td>{{ $cotizacion->conexiones ? 'Sí' : 'No' }}</td>
            </tr>
            <tr>
                <td>Mesas:</td>
                <td>{{ $cotizacion->mesas }}</td>
            </tr>
            <tr>
                <td>Sillas:</td>
                <td>{{ $cotizacion->sillas }}</td>
            </tr>
            <tr>
                <td>Tarimas:</td>
                <td>{{ $cotizacion->tarimas }}</td>
            </tr>
            <tr>
                <td>Color:</td>
                <td>{{ $cotizacion->color }}</td>
            </tr>
            <tr>
                <td>Cortinas:</td>
                <td>{{ $cotizacion->cortinas ? 'Sí' : 'No' }}</td>
            </tr>
            <tr>
                <td>Decoración extra:</td>
                <td>{{ $cotizacion->decoracion_extra }}</td>
            </tr>
            <tr>
                <td>Estado de la cotización:</td>
                <td>{{ $cotizacion->status }}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        Gracias por confiar en ARTvent!
    </p>

</body>
</html>
