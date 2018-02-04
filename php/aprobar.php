<?php 
require_once 'conexion.php';
 $a =  $_POST['aprobar'];
 $u = $_POST['usr'];
 $m = $_POST['monto'];

 $sqlaprobar = "UPDATE deposito  SET aprobar = $a WHERE usuario = '$u' AND montodeposito = '$m'";
 $aprobar = mysqli_query($conexion, $sqlaprobar);
header('location: dashboard.php');

 ?>