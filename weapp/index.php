<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
   <!--link de estilos de CSS-->	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<title>Prueba de Login</title>
   <!--link de estilos de CSS-->
</head>
<body>

  <div class="container py-5">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="col-md-12 text-center mb-5">
  				<img src="..." alt="...">
  				<div class="row">
  					<div class="col-md-6 mx-auto">
  						<div class="card rounded-2 rounded-2" id="login-form">
  							<div class="card-header">
  								<h3 class="mb-0 text-center">Login | AJRS117</h3>
  							</div>
  							<div class="card-body">
  								<form class="form" name="login" action="include/login.php" id="formlogin" method="POST" autocomplete="off">
  									<div class="form-group">
                       <input type="text" name="user" id="user" class="form-control form-control-lg rounded-0" placeholder="Usuario">        
                    </div>
                    <div class="form-group" >
                      <input type="password" name="password" id="pwd" class="form-control form-control-lg rounded-0" placeholder="Contraseña" required>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" name="checkbox" id="ver" class="custom-control-input" onclick="verpass(this);" >
                          <label for="ver" class="custom-control-label">Ver Password</label>
                        </div>
                      </div>
                      <div class="col">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#registromodal">¿Aun no tienes tu cuenta?</a>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block" id="btnlogin">Ingresa</button>
  								</form>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

<!--Termina el formulario del Login-->
<script>
  function verpass(cb){
    if (cb.checked) 
     $('#pwd').attr("type","text");
     else $('#pwd').attr("type","password");
   
  }
</script>

  <!--link de funciones de JS--> 
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!--link de funciones de JS--> 
</body>
</html>