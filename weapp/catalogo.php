<?php 
include 'include/conecta.php';

session_start();
$usuario = $_SESSION['Usuario'];
 if (!isset($usuario)) {
  header("location:index.php");
 }



//esto es la consulta para conectar la base de datos con la web app progresiva
$query = "SELECT * FROM productos ORDER BY id_producto";

$ejecuta = $mysqli->query($query);
$numero = $ejecuta->num_rows;

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>

<link type="text/css" rel="stylesheet" href="css/incons_mios.css" >
<link rel="stylesheet" type="text/css" href="css/pace.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
  <title>Practica</title>



</head>
<body>

<!--Empieza Navbar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><span class="icon-facebook-official"></span>Mercado en Linea</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="icon-firefox"></span>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="icon-github"></span>Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">    <span class="icon-chrome"></span> Disabled</a>
      </li>
       
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span class="icon-android"></span> Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Alimentos frescos</a>
          <a class="dropdown-item" href="#">Frituras y dulces</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Bebidas</a>
        </div>
      </li>
    </ul>
   
    <ul class="navbar-nav ml-auto nav-flex-icons">
      
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="icon-user-male"><?php echo $_SESSION['Usuario'];?></span>
          
        </a><
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="#">Configuracion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalCenter">Cerrar sesion</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#"><span class="icon-github"></span>Version 1.0</a>
      </li>
    </ul>

    
  </div>
</nav>

<!--Termina la Navbar-->

<!--ventana modal para el user-->
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-tittle" id="ModalCenterTitle">Cerrar Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">Deseas cerrar tu sesion</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" >Cerrar Sesion</button>
    </div>
  </div>
</div>
</div>

<!--ventana modal para el user-->


<!--Alerta de conexion -->


<?php echo $mensaje;?>

<!--Termina la alerta de conexion-->




<!--Primera tarjeta de la Corona-->
<div class="container">
<div class="row">

  <?php while($row = $ejecuta->fetch_assoc()){?>

<div class="card" style="width: 12rem;">
  <img src="img/<?php echo $row['imagen'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
    <p class="card-text"><?php echo $row['descripcion']; ?></p>
    <p class="card-text"><?php echo $row['precio']; ?></p>
    <a href="#" class="btn btn-primary">Agregar al carrito</a>
   </div>
   </div>
   <?php } ?>
   </div>
   </div>
<!--Termina tarjeta de la Corona-->


<!--Llamar el JS-->

<script src="js/pace.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script  src="js/bootstrap.min.js"></script>

<!--Termino de llamar JS-->

</body>
</html>