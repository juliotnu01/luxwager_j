<?php 
include 'conexion.php';
session_name("loginUsuario"); 
session_start();

$sql1 = "SELECT * FROM usuario";
$SelecUsuario = mysqli_query($conexion,$sql1);
$row = mysqli_fetch_assoc($SelecUsuario);
var_dump($row);
		
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
		header("location: dashboard.php");
	}
}else{
echo "<script>alert('Ha ocurrido un problema vuelva a inicar sesion'); window.location.href = '../index.php'</script>";
} 

 ?>