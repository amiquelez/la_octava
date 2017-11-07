<?php

	$sqlProductos = mysqli_query($con, 'SELECT * FROM producto WHERE premium = 0 ORDER BY orden');

	$sqlCategorias = mysqli_query($con, 'SELECT * FROM categorias');

	$categoria = [];

	while ( $categorias = mysqli_fetch_object($sqlCategorias) ){

		$id = $categorias->id;
  		$nombre = $categorias->nombre;

  		$categoria[$id] = $nombre;

	}

?>