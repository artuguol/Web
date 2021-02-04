<?php

require "modelo/Usuario.php";
require "modelo/Bd.php";
require "modelo/funciones.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="usuarioForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

    <ul>
        <li><label>Usuario: </label><input type="text" name="usuario"> </li>
        <li><label>Contraseña: </label><input type="text" name="contraseña"> </li>
        <li><label>Foto: </label><input type="file" name="foto"></li>
        <li><input type="submit" value="Guardar"></li>
    </ul>

</form>

</body>
</html>
