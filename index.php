<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Concurso MUJER MIGRANTE 2017</title>


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
            <div class="col-md-12">
                <img src="img/Mujer%20Migrante%201000x400.jpg" alt="Mujer Migrante" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" action="captura.php" method="post">
                    <div class="form-group">
                        <label for="rfc" class="col-md-4 control-label">CURP / N&uacute;m. IDE</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="curp" placeholder="Ingresa tu CURP / N&uacute;m. IDE">
                            <input type="hidden" id="acc" name="acc" value="ingreso">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-primary pull-right">Ingresar</button>
                            <a href="http://aplicaciones.inmujeres.gob.mx/mujermigrante/" class="btn btn-default pull-right">Salir</a>
                        </div>
                    </div>
                </form>
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