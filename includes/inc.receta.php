<?php

	$receta = $_GET["receta"];

	if( $receta <= 0 ){

		$receta = 1;
	}

	$sqlReceta = mysqli_query($con, 'SELECT * FROM recetas WHERE id = '.$receta);

	$receta = mysqli_fetch_object($sqlReceta);


	/* Recetas relacionadas */

	if( $receta->premium == 1 ){

		$sqlRecetasRel = mysqli_query($con, 'SELECT * FROM recetas WHERE premium = 1 ORDER BY orden');

	}else{

		$sqlRecetasRel = mysqli_query($con, 'SELECT * FROM recetas WHERE premium = 0 ORDER BY orden');

	}

?>