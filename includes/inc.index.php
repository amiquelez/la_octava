<?php

	$sqlProductosDestacados = mysqli_query($con, 'SELECT * FROM producto WHERE destacado = 1 ORDER BY orden');


	/* Recetas destacadas */

	$sqlRecetasDes = mysqli_query($con, 'SELECT * FROM recetas WHERE premium = 0 ORDER BY orden');

?>