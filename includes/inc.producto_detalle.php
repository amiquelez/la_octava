<?php

	$prod = $_GET["prod"];


	$sqlProducto = mysqli_query($con, 'SELECT * FROM producto WHERE urlseo = "'.$prod.'"');

	$rowcount = mysqli_num_rows($sqlProducto);

	if( $rowcount == 0 ){

		$sqlProducto = mysqli_query($con, 'SELECT * FROM producto WHERE id = 1');

	}

	$producto = mysqli_fetch_object($sqlProducto);


	/* GALERIA DEL PRODUCTO */

	$sqlGaleriaProducto = mysqli_query($con, 'SELECT * FROM galeria WHERE prod_id = '.$producto->id.' AND alta = 1');

	/* NEXT y PREV Productos */


	$next = $producto->siguiente;

	$prev = $producto->anterior;

	$sqlProductoNext = mysqli_query($con, 'SELECT * FROM producto WHERE id = '.$next);

	$productoNext = mysqli_fetch_object($sqlProductoNext);


	$sqlProductoPrev = mysqli_query($con, 'SELECT * FROM producto WHERE id = '.$prev);

	$productoPrev = mysqli_fetch_object($sqlProductoPrev);


?>