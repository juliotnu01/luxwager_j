<?php include 'conexion.php';
session_name("loginUsuario"); 
session_start(); 
	$fechaGuardada = $_SESSION["ultimoAcceso"]; 
    $ahora = date("Y-n-j H:i:s"); 
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada)); 
    if($tiempo_transcurrido >= 3600) { 
      session_unset(); 
      session_destroy(); // destruyo la sesión 
     echo "<script>alert('Sesion expirada por favor re-ingrese en su cuenta'); window.location.href = '../index.php'</script>";
     //si pasaron 60 minutos o más

    }else { 
      //sino, actualizo la fecha de la sesión 
    $_SESSION["ultimoAcceso"] = $ahora; 	

   }  
        $idUsr = $_SESSION['id_usuario'];
        $sqlCoins = "SELECT round(SUM(deposito.montodeposito), 2) coins FROM deposito WHERE usuario =  $idUsr AND aprobar = 1";
        $coins = mysqli_query($conexion,$sqlCoins);
        $rowCoins = mysqli_fetch_assoc($coins);

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
      <h4><?php echo  "Usuario: " . $_SESSION['nombre_usuario']  ; ?></h4>
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

		<h4 class="text-left"> <?php echo " Coins: ". $rowCoins['coins'];  ?>  </h4  > 

      <?php include 'jugadas.php'; ?>
    </div>
  </div>
</div>
	
	
	<?php include 	'modal-jugadas.php'; ?>
	<?php include 	'modal-cajero.php'; ?>
	<?php include   'modal-banco.php'; ?>



</body>
</html>

