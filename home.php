<?php 
 function mostrarproductos()
 {
 	$productos='';
 	$sql="select * FROM producto";
 	$conexion=mysqli_connect('localhost', 'root', '', 'proyecto');
 	$resultado=mysqli_query($conexion,$sql);
 	while ($row=mysqli_fetch_array($resultado)) {
 		$productos.='<div class="col-md-3 col-sm-6">
	            <div class="product-grid7">
	                <div class="product-image7">
	                    <a href="#">
	                        <img class="pic-1" src="img/'.$row['img1'].'">
	                        <img class="pic-2" src="img/'.$row['img2'].'">
	                    </a>
	                    <ul class="social">
	                    </ul>
	                    <span class="product-new-label">New</span>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="#">'.$row['nombre'].'</a></h3>
	                    <ul class="rating">
	                        <li class="fa fa-star"></li>
	                        <li class="fa fa-star"></li>
	                        <li class="fa fa-star"></li>
	                        <li class="fa fa-star"></li>
	                        <li class="fa fa-star"></li>
	                    </ul>
	                    <div class="price">
	                        <span>'.$row['precio'].'</span>
	                    </div>
	                </div>
	            </div>
	        </div>';
 	}
 	return $productos;
 } ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Electroshop</h1>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="tabla">Tabla</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Cerrar sesion</a>
      </li>
       </ul>
    <form class="form-inline my-2 my-lg-0" action="busqueda.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<header id="header">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="header-content-left">
					<img src="imagenes/img1.jpg" style="width: 100%">
				</div>
			</div>
			<div class="col-md-6">
				<div class="header-content-right">
					<h1 class="display 4">Electroshop</h1>
					<p class="mt-5">¡Bienvenido a Electroshop!<br>
					Tienda de electrodomesticos hecha en html y php</p>
					<button type="button" class="btn btn-info"><a href="#productos" style="text-decoration: none;color: #fff;">Click aqui para continuar</a></button>
				</div>
			</div>
			
		</div>
	</div>
</header>
<section id="comentarios">
	<div class="container" id="productos">
	    <h3 class="h3">productos</h3>
	    <div class="row">
	     <?php echo mostrarproductos(); ?>
	    </div>
	</div>
	            

</section>

	


	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
|



</body>
</html>
