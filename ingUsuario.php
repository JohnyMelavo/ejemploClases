<?php
require './Usuario.php';

$oUsr = new Usuario($_POST["rut"], $_POST["nombre"], $_POST["apellido"]);

//var_dump($oUsr)

?>Rut: <?= $oUsr->getSRut();
?></br>Nombre: <?= $oUsr->getSNombre();
?></br>Apellido: <?= $oUsr->getSApellido();
?>
<?php

?>