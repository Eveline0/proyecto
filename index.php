<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilosinicio.css">
	<script src="https://kit.fontawesome.com/ccc8bce11a.js" crossorigin="anonymous"></script>

</head>
<body>
	<header class="masthead">
	  <div class="container h-100">
	    <div class="row h-100 align-items-center">
	      <div class="col-12 text-center">
	        <h1 class="font-weight-light" id="titulo">Bienvenido a Electroshop</h1>
	        <div>
	        	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm">Inicia sesión</button>
	      </div>
	      <div style="margin-top: 20px;">
	      	<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalRegisterForm">Registrate</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</header>


	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	  aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <h4 class="modal-title w-100 font-weight-bold">Inicia sesion</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body mx-3">
	      	<form action="iniciar.php" method="post">
	      		<div class="md-form mb-5">
	      		  <i class="fas fa-envelope prefix grey-text"></i>
	      		  <input type="email" id="defaultForm-email" class="form-control validate" name="email">
	      		  <label data-error="wrong" data-success="right" for="defaultForm-email">Tu email</label>
	      		</div>

	      		<div class="md-form mb-4">
	      		  <i class="fas fa-lock prefix grey-text"></i>
	      		  <input type="password" id="defaultForm-pass" class="form-control validate" name="contrasena">
	      		  <label data-error="wrong" data-success="right" for="defaultForm-pass">Tu contraseña</label>
	      		</div>
	      		<input type="submit" name="" value="Inicia sesion" class="btn btn-default">
	      	</form>
	        

	      </div>
	      
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	  aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <h4 class="modal-title w-100 font-weight-bold">Registrate</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body mx-3">
	      	<form action="registrar.php" method="post">
	      		<div class="md-form mb-5">
	      		  <i class="fas fa-user prefix grey-text"></i>
	      		  <input type="text" id="orangeForm-name" class="form-control validate" name="nombre">
	      		  <label data-error="wrong" data-success="right" for="orangeForm-name">Tu nombre</label>
	      		</div>
	      		<div class="md-form mb-5">
	      		  <i class="fas fa-envelope prefix grey-text"></i>
	      		  <input type="email" id="orangeForm-email" class="form-control validate" name="email">
	      		  <label data-error="wrong" data-success="right" for="orangeForm-email">Tu email</label>
	      		</div>

	      		<div class="md-form mb-4">
	      		  <i class="fas fa-lock prefix grey-text"></i>
	      		  <input type="password" id="orangeForm-pass" class="form-control validate" name="contrasena">
	      		  <label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
	      		</div>
	      		<div class="md-form mb-4">
	      		  <i class="fas fa-lock prefix grey-text"></i>
	      		  <input type="password" id="orangeForm-pass" class="form-control validate" name="repetir">
	      		  <label data-error="wrong" data-success="right" for="orangeForm-pass">Confirmar contraseña</label>
	      		</div>
	      		<input type="submit" class="btn btn-deep-orang" value="Inicia sesión">
	      	</form>	      
	      </div>
	      <div class="modal-footer d-flex justify-content-center">
	        
	      </div>
	    </div>
	  </div>
	</div>

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>