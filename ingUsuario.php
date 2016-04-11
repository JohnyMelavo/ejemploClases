<?php
//session_start();  
require './Usuario.php';

$oUsr = new Usuario($_POST["rut"], $_POST["nombre"], $_POST["apellido"]);

//var_dump($oUsr) --------Arroja por pantalla los detalles de la variable-----

//$_SESSION["oUsr"]=$oUsr;

?>Rut: <?= $oUsr->getSRut();
?></br>Nombre: <?= $oUsr->getSNombre();
?></br>Apellido: <?= $oUsr->getSApellido();
?>
<?php

?>