<?php

	$sqlProductosPremium = mysqli_query($con, 'SELECT * FROM producto WHERE premium = 1 ORDER BY orden');

	$sqlRecetasPremium = mysqli_query($con, 'SELECT * FROM recetas WHERE premium = 1 ORDER BY orden');

?>