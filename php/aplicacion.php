<?php 
//iniciamos la sesión 
session_name("loginUsuario"); 
session_start(); 

//antes de hacer los cálculos, compruebo que el usuario está logueado 
//utilizamos el mismo script que antes 
if ($_SESSION["autentificado"] != "SI") { 
    //si no está logueado lo envío a la página de autentificación 
    header("Location: ../index.php"); 
} else { 
    //sino, calculamos el tiempo transcurrido 
    $fechaGuardada = $_SESSION["ultimoAcceso"]; 
    $ahora = date("Y-n-j H:i:s"); 
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada)); 
    // var_dump($tiempo_transcurrido);
    //comparamos el tiempo transcurrido 
     if($tiempo_transcurrido >= 10) { 
     echo "<script>alert('Sesion expirada por favor re-ingrese en su cuenta'); window.location.href = '../index.php'</script>";
     //si pasaron 10 minutos o más 
      session_destroy(); // destruyo la sesión 
      //sino, actualizo la fecha de la sesión 
    }else { 
    $_SESSION["ultimoAcceso"] = $ahora; 
    echo "<script>alert('Bienvenido'); window.location.href = 'dashboard.php'</script>";
   } 
} 

 ?>
