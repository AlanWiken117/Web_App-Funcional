<?php

$mensaje ="";
$servidor ="localhost";
$usuario ="root";
$password = "";
$bd = "my_webapp_pro";
$mysqli = mysqli_connect($servidor,$usuario,$password,$bd);
if ($mysqli->connect_error) {

	die('Error al conectar a la Base de Datos de la WebApp'.$mysqli->connect_error);
}

else {
	$mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
	 <strong> Wow!</strong> Lograste conectar la BD de la WebApp, felicidades. 
	 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	    <span aria-hidden='true'>&times;</span>
        </button>
 	    </div>";

}



?>
  