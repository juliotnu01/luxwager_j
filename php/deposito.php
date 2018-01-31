<?php 
include 'conexion.php';
session_name("loginUsuario"); 
session_start();
$_SESSION['usuario'];

$sql1 = "SELECT * FROM usuario";
$SelecUsuario = mysqli_query($conexion,$sql1);
$row = mysqli_fetch_array($SelecUsuario);
var_dump($row);

if ($row['nombre'] = $_SESSION['usuario']) {
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	$codarea = $_POST['codarea'];
	$numtelefono = $_POST['numtelefono'];
	$coddeposito = $_POST['coddeposito'];
	$banco = $_POST['banco'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$usuario = $row['id'];
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
		echo "Depositado";
	}else{
		var_dump($registroDeposito, $sql);
	}

}
 ?>