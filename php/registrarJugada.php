<?php 
include 'conexion.php';

$dinero_1	= 			$_POST['dinero_1'];
$spread_1	= 			$_POST['spread_1'];
$ab_1	= 				$_POST['ab_1'];
$ganar1eram_1	= 		$_POST['ganar1eram_1'];
$rl1eram_1	=			$_POST['rl1eram_1'];
$ab1eram_1	= 			$_POST['ab1eram_1'];
$rl1erc_1	= 			$_POST['rl1erc_1'];
$ab1erc_1	= 			$_POST['ab1erc_1'];
$rl2doc_1	= 			$_POST['rl2doc_1'];
$ab2doc_1	= 			$_POST['ab2doc_1'];
$rl3erc_1	= 			$_POST['rl3erc_1'];
$ab3erc_1	= 			$_POST['ab3erc_1'];
$rl4toc_1	= 			$_POST['rl4toc_1'];
$ab4toc_1	= 			$_POST['ab4toc_1'];
$Equipo_1	= 			$_POST['equipo_1'];

$dinero_2	= 			$_POST['dinero_2'];
$spread_2	= 			$_POST['spread_2'];
$ab_2	= 				$_POST['ab_2'];
$ganar1eram_2	= 		$_POST['ganar1eram_2'];
$rl1eram_2	=			$_POST['rl1eram_2'];
$ab1eram_2	= 			$_POST['ab1eram_2'];
$rl1erc_2	= 			$_POST['rl1erc_2'];
$ab1erc_2	= 			$_POST['ab1erc_2'];
$rl2doc_2	= 			$_POST['rl2doc_2'];
$ab2doc_2	= 			$_POST['ab2doc_2'];
$rl3erc_2	= 			$_POST['rl3erc_2'];
$ab3erc_2	= 			$_POST['ab3erc_2'];
$rl4toc_2	= 			$_POST['rl4toc_2'];
$ab4toc_2	= 			$_POST['ab4toc_2'];
$Equipo_2	= 			$_POST['equipo_2'];

$sql = "INSERT INTO jugada (dinero_1, 
							spread_1, 
							ab_1, 
							ganar1eram_1, 
							rl1eram_1, 
							ab1eram_1, 
							rl1erc_1, 
							ab1erc_1, 
							rl2doc_1, 
							ab2doc_1, 
							rl3erc_1, 
							ab3erc_1, 
							rl4toc_1, 
							ab4toc_1, 
							equipo_1,
							dinero_2, 
							spread_2, 
							ab_2, 
							ganar1eram_2, 
							rl1eram_2, 
							ab1eram_2, 
							rl1erc_2, 
							ab1erc_2, 
							rl2doc_2, 
							ab2doc_2, 
							rl3erc_2, 
							ab3erc_2, 
							rl4toc_2, 
							ab4toc_2, 
							equipo_2) 
		VALUES ('$dinero_1', 
				'$spread_1', 
				'$ab_1', 
				'$ganar1eram_1', 
				'$rl1eram_1', 
				'$ab1eram_1', 
				'$rl1erc_1', 
				'$ab1erc_1', 
				'$rl2doc_1', 
				'$ab2doc_1', 
				'$rl3erc_1', 
				'$ab3erc_1', 
				'$rl4toc_1', 
				'$ab4toc_1', 
				'$Equipo_1',
				'$dinero_2', 
				'$spread_2', 
				'$ab_2', 
				'$ganar1eram_2', 
				'$rl1eram_2', 
				'$ab1eram_2', 
				'$rl1erc_2', 
				'$ab1erc_2', 
				'$rl2doc_2', 
				'$ab2doc_2', 
				'$rl3erc_2', 
				'$ab3erc_2', 
				'$rl4toc_2', 
				'$ab4toc_2', 
				'$Equipo_2'	)";

	$acceso = mysqli_query($conexion, $sql);

	if ($acceso) {
		header("location: dashboard.php");
	}else{
		echo "no realizada <br>";
		var_dump($sql);
	}

 ?>