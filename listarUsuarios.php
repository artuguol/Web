<?php

require "modelo/ListaUsuarios.php";
require "modelo/Usuario.php";
require "modelo/Bd.php";
require "modelo/funciones.php";

$lista = new ListaUsuarios();
$lista->obtenerElementos();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="js/scritptsFiguras.js" type="text/javascript"></script>
</head>
<body>
<section>

    <h1>Lista de figuras en mi colleción</h1>

    <div class="botones"><a href="ed_figura.php">Añadir</a></div>


    </div>
</section>

</body>
</html>
