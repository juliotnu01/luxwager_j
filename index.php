
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Luxwager</title>
	<!-- Bootstrap -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<?php include 'php/conexion.php'; ?>
</head>
<body>	
	<div class="container">
		<nav class="navbar navbar-right" style="position: relative; top: 10px; ">
		  <form method="POST" action="./php/login.php">
			<div class="form-group col-md-4">
			    <input type="text" class="form-control" name="usuario" id="email" placeholder="Usuario">
  			</div>
  			<div class="form-group col-md-4">
			    <input type="text" class="form-control" name="clave" id="password" placeholder="Contraseña">
  			</div>
			<input class="btn btn-default" type="submit" value="Ingresar">
		  </form>
		  <input class="btn btn-default " type="submit" value="Registrarse" style="position: relative;left: 80px; bottom: 48px;" data-toggle="modal" data-target="#myModal">
		</nav>
		</div>
		
		<h1 class="jumbotron"><?php echo APP; ?></h1>

	</div>

<?php include './php/modal-registro.php' ?>

</body>
</html>