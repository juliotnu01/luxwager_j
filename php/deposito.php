<<<<<<< HEAD
<?php 
include 'conexion.php';
session_name("loginUsuario"); 
session_start();


if (isset($_SESSION['id_usuario'])) {
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	$codarea = $_POST['codarea'];
	$numtelefono = $_POST['numtelefono'];
	$coddeposito = $_POST['coddeposito'];
	$banco = $_POST['banco'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$usuario = $_SESSION['id_usuario'];
	$numCuenta = $_POST['numCuenta'];
	$montodeposito = $_POST['montodeposito'];


	$sql = "INSERT INTO deposito (nombre, 
								  apellido, 
								  edad, 
								  codarea, 
								  numtelefono, 
								  coddeposito, 
								  banco, 
								  fecha, 
								  hora, 
								  usuario,
								  numCuenta,
								  montodeposito) 
			VALUES ('$nombre', 
					'$apellido', 
					'$edad', 
					'$codarea', 
					'$numtelefono', 
					'$coddeposito', 
					'$banco', 
					'$fecha', 
					'$hora', 
					'$usuario', 
					'$numCuenta', 
					'$montodeposito')";

	$registroDeposito = mysqli_query($conexion, $sql);


	if ($registroDeposito = true) {
		header ("Location: dashboard.php"); 
	}else{
		var_dump($registroDeposito, $sql);
	}

}
=======
<?php 
include 'conexion.php';
session_name("loginUsuario"); 
session_start();

		
if (isset($_SESSION['id_usuario'])) {
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	$codarea = $_POST['codarea'];
	$numtelefono = $_POST['numtelefono'];
	$coddeposito = $_POST['coddeposito'];
	$banco = $_POST['banco'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$usuario = $_SESSION['id_usuario'];
	$numCuenta = $_POST['numCuenta'];
	$montodeposito = $_POST['montodeposito'];


	$sql = "INSERT INTO deposito (nombre, 
								  apellido, 
								  edad, 
								  codarea, 
								  numtelefono, 
								  coddeposito, 
								  banco, 
								  fecha, 
								  hora, 
								  usuario,
								  numCuenta,
								  montodeposito) 
			VALUES ('$nombre', 
					'$apellido', 
					'$edad', 
					'$codarea', 
					'$numtelefono', 
					'$coddeposito', 
					'$banco', 
					'$fecha', 
					'$hora', 
					'$usuario', 
					'$numCuenta', 
					'$montodeposito')";

	$registroDeposito = mysqli_query($conexion, $sql);


	if ($registroDeposito) {
		header("Location: dashboard.php"); 
	}

}else{
		echo "<script>alert('Ha ocurrido un error tienes que volver a inicar sesion'); window.location.href= 'logout.php';</script>";
	}
>>>>>>> 9841c8481cf0ca8ef9a20d468de62f9471c758b2
 ?>