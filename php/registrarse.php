<?php 
namespace php\registrarse;
include 'conexion.php';


$usuario = $_POST['correo'];
$clave = $_POST['clave'];
if (!empty($usuario) && !empty($clave)) {
var_dump($usuario,$clave);
$sql = "INSERT INTO usuario (nombre, clave) VALUES ('$usuario','$clave')";
$registro = mysqli_query($conexion, $sql);
echo "<script>alert('Gracias Por Registrarse'); window.location.href='../index.php';</script>";
	
}else{
	echo "<script>alert('Los campos no pueden estar vacios'); window.location.href='../index.php'; </script>";
}



 ?>
