x <?php include 'conexion.php';
session_name("loginUsuario"); 
session_start(); 
	$fechaGuardada = $_SESSION["ultimoAcceso"]; 
    $ahora = date("Y-n-j H:i:s"); 
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada)); 
    if($tiempo_transcurrido >= 3600) { 
      session_unset(); 
      session_destroy(); // destruyo la sesión 
     echo "<script>alert('Sesion expirada por favor re-ingrese en su cuenta'); window.location.href = '../index.php'</script>";
     //si pasaron 10 minutos o más
      //sino, actualizo la fecha de la sesión 
    }else { 
    $_SESSION["ultimoAcceso"] = $ahora; 	
   }

   $sql = "SELECT * FROM deposito";
   $depositos = mysqli_query($conexion,$sql);
   $row = mysqli_fetch_array($depositos);

   $sqlJugada ="SELECT * FROM jugada;";
   $jugada = mysqli_query($conexion, $sqlJugada);
   $rowJugada = mysqli_fetch_array($jugada);

   $sqldepositos = "SELECT round(SUM(deposito.montodeposito), 4) d FROM deposito";
   $depositos = mysqli_query($conexion,$sqldepositos);
   $rowdepositos = mysqli_fetch_array($depositos);

    
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo APP; ?></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</head>
<body>


	
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4><?php echo  "Usuario: " . $_SESSION['usuario']  ; ?></h4>
      <ul class="nav nav-pills nav-stacked">
        <li><button class="btn btn-danger col-sm-12" data-toggle="modal" data-target="#cajero">CAJERO</button></li>
        <br><br> 
        <li><button class="btn btn-success col-sm-12" data-toggle="modal" data-target="#deposito">DEPOSITOS</button></li>
        <br><br> 
        <li><button class="btn btn-info	 col-sm-12" data-toggle="modal" data-target="#jugada">JUGADA</button></li>
      </ul><br>
		<ul class="nav nav-pills nav-stacked"><li><a class="text-left" href='logout.php'> Cerra Session</a></li></ul>
      <br>
      <!-- <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div> -->
    </div>

    <div class="col-sm-9">
		<h1 class="jumbotron"><?php echo APP;  ?> </h1>
		<h4 class="text-left"> <?php echo " Coins: ". $row['montodeposito'];  ?>  </h4  > 
      <?php include 'jugadas.php'; ?>
    </div>
  </div>
</div>
	
	
	<?php include 	'modal-jugadas.php'; ?>
	<?php include 	'modal-cajero.php'; ?>
	<?php include   'modal-banco.php'; ?>



</body>
</html>
