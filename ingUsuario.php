<?php
require './Usuario.php';

$oUsr = new Usuario($_POST["rut"], $_POST["nombre"], $_POST["apellido"]);

//var_dump($oUsr)

?>Rut: <?php $oUsr->getSRut();
?>Nombre: <?php $oUsr->getSNombre();
?>Apellido: <?php $oUsr->getSApellido();
?>
<?php

?>