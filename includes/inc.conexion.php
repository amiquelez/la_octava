<?php
	
	$con = mysqli_connect("localhost","laoctava_admin","q19Th1r9vO","laoctava_laoctava");

	// Check connection
	if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$ruta = 'http://laoctava.com.ar/';

?>