<?php
/**
 * Created by PhpStorm.
 * User: armcontable
 * Date: 26/05/2017
 * Time: 11:29 AM
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
        <div class="row">
            <div class="col-md-12">
                <h2>Lista de participantes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr class="red">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h1><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 67</h1>
            </div>
            <div class="col-md-2">
                <h1><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 8</h1>
            </div>
            <div class="col-md-2">
                <h1><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> 21</h1>
            </div>
        </div>
        <div class="row"><div class="col-md-12">&nbsp;</div></div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>RFC</th>
                                <th>Nombre</th>
                                <th class="text-center">Edad</th>
                                <th>Tipo</th>
                                <th class="text-center">Validar</th>
                                <th class="text-center">Estatus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <a href="validarTrabajo.php">
                                        <button class="btn btn-primary btn-sm">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </button>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante interna</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Emigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Migrante de retorno</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm disabled">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>AAAA999999XXX</td>
                                <td>Alejandra Castro Orozco</td>
                                <td class="text-center">42</td>
                                <td>Inmigrante</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row"><div class="col-md-12">&nbsp;</div></div>
    </div>
</main>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
<!-- End JS -->

</body>
</html>

