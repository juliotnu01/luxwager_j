<?php 
	include 'conexion.php';

	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	if (!empty($usuario) && !empty($clave)) {
	$sql = "SELECT * FROM usuario";
	$acceso = mysqli_query($conexion, $sql); 
    $row = mysqli_fetch_array($acceso);
 
}   


//vemos si el usuario y contraseña es váildo 
if ($row['nombre'] = $usuario && $row['clave'] = $clave ){ 
    // usuario y contraseña válidos 
    session_name("loginUsuario"); 
    //asigno un nombre a la sesión para poder guardar diferentes datos 
   session_start(); 
    // inicio la sesión 
    $_SESSION["autentificado"]= "SI"; 
    $_SESSION["usuario"] = $usuario;
    //defino la sesión que demuestra que el usuario está autorizado 
    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 
    //defino la fecha y hora de inicio de sesión en formato aaaa-mm-dd hh:mm:ss 
    header ("Location: aplicacion.php"); 


}else { 
    // si no existe le mando otra vez a la portada 
    echo "<script>alert('Usuario o la contraseña no existe por favor verifique sus datos he ingrese nuevamente'); window.location.href = '../index.php'</script>";
} 
 ?>