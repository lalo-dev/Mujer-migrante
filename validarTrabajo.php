<?php
/**
 * Created by PhpStorm.
 * User: armcontable
 * Date: 26/05/2017
 * Time: 12:10 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: HOPEWELL
 * Date: 26/05/2017
 * Time: 0:01
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo de nueva página para GOB.mx</title>
    <!-- CSS -->
    <link href="https://framework-gb.cdn.gob.mx/favicon.ico" rel="shortcut icon">
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    <!-- Respond.js soporte de media queries para Internet Explorer 8 -->
    <!-- ie8.js EventTarget para cada nodo en Internet Explorer 8 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.2.2/ie8.js"></script>
    <![endif]-->
</head>
<body>

<!-- Contenido -->
<main class="main">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="http://www.gob.mx"><i class="icon icon-home"></i></a></li>
                    <li class="active">Inicio</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h1>Mujer migrante</h1>
            </div>
        </div>
        <div class="row"><div class="col-md-12"><hr class="red"></div></div>
        <div class="row">
            <div class="col-md-12">
                <h2>Validar información de la participante y su trabajo</h2>
            </div>
        </div>
        <div class="row"><div class="col-md-12">&nbsp;</div></div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Campo</th>
                                <th>Respuesta</th>
                                <th class="text-center" style="width: 160px;">Estatus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CURP / Núm. IDE</td>
                                <td>AAAA999999XXX</td>
                                <td>
                                    <select class="form-control input-sm">
                                        <option value="0">Pendiente</option>
                                        <option value="1">Aceptado</option>
                                        <option value="2">Rechazado</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nombre completo</td>
                                <td>Alejandra Castro Orozco</td>
                                <td>
                                    <select class="form-control input-sm">
                                        <option value="0">Pendiente</option>
                                        <option value="1">Aceptado</option>
                                        <option value="2">Rechazado</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Lugar de nacimiento</td>
                                <td>México</td>
                                <td>
                                    <select class="form-control input-sm">
                                        <option value="0">Pendiente</option>
                                        <option value="1">Aceptado</option>
                                        <option value="2">Rechazado</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Entidad federativa</td>
                                <td>Ciudad de México</td>
                                <td>
                                    <select class="form-control input-sm">
                                        <option value="0">Pendiente</option>
                                        <option value="1">Aceptado</option>
                                        <option value="2">Rechazado</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <select class="form-control input-sm">
                                        <option value="0">Pendiente</option>
                                        <option value="1">Aceptado</option>
                                        <option value="2">Rechazado</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row"><div class="col-md-12">&nbsp;</div></div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="captura.php" method="post">
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-8">
                                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
<!-- End JS -->

</body>
</html>
