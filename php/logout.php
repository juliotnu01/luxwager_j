<?php 
 session_name("loginUsuario"); 
    //asigno un nombre a la sesión para poder guardar diferentes datos 
   session_start(); 
    // inicio la sesión 
   session_unset();
   session_destroy();

   header("location: ../index.php");
 ?>