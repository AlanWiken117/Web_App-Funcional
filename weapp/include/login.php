<?php 
 session_start();
 include '../include/conecta.php';
 $usuario = $_POST['user'];
 $password = md5($_POST['password']);
 //consultar para ingresar al sistema y validar la variable de sesion
 $q = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' and Password = '$password'";
 if ($resultado = $mysqli->query($q)) {
 	while ($row = $resultado->fetch_array()){
 		$userok = $row['nombre_usuario'];
 		$passwordok = $row['password'];
 	}
 	$resultado->close();
 }
 $mysqli->close();
 if (isset($usuario)&& isset($password)) {
 	if ($usuario == $userok && $password == $passwordok) {
 		$_SESSION['login']= TRUE;
 		$_SESSION['Usuario'] = $usuario;
 		header("location:../catalogo.php");
 	}

 	else {
 		header("location../index.php");
 	}
 } else {
 	header("location../index.php");
 }

?>