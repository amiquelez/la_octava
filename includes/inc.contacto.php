<?php

	$nombre = $_POST["data_nombre"];
	$empresa = $_POST["data_empresa"];
	$email = $_POST["data_email"];
	$mensaje = $_POST["data_mensaje"];


	$message = '';

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: Usuario <'.$email.'>' . "\r\n";


	$message .= '<p><b>Nombre</b>: '.$nombre.'</p>';
	$message .= '<p><b>Empresa</b>: '.$empresa.'</p>';
	$message .= '<p><b>Email</b>: '.$email.'</p>';
	$message .= '<br /><p><b>Mensaje</b>: '.$mensaje.'</p>';



	mail('laoctava@laoctava.com.ar','La Octava - contacto',$message,$headers);

?>