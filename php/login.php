<?php 
	include 'conexion.php';
    session_start(); 

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    if (!empty($usuario) && !empty($clave)) {
    $sql = "SELECT * FROM usuario WHERE nombre = '$usuario' AND clave = '$clave'";
    $acceso = mysqli_query($conexion, $sql); 
    $row = mysqli_fetch_assoc($acceso);
}   


//vemos si el usuario y contraseña es váildo 
 if ($row['nombre'] = $usuario && $row['clave'] = $clave){

       
        session_name("loginUsuario");

        $_SESSION["autentificado"]= "SI"; 
        $_SESSION["id_usuario"] = $row['id'];
        $_SESSION['nombre_usuario'] = $row['nombre'] ;
        $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 

     
     header ("Location: aplicacion.php"); 

}else { 
    // si no existe le mando otra vez a la portada 
    echo "<script>alert('Usuario o la contraseña no existe por favor verifique sus datos he ingrese nuevamente'); window.location.href = '../index.php'</script>";   
} 
 ?>