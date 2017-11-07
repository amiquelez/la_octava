<?php
	

	$sqlRecetas = mysqli_query($con, 'SELECT * FROM recetas WHERE premium = 0 ORDER BY orden');

?>