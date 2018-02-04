<?php 
	include 'config.php';
	/**
	* 
	Conexion
	*/
	$conexion = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die (mysqli_connect_errno("Fallo la conexion"));
// 

 ?>