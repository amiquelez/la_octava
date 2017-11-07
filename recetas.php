<?php
	include_once('includes/inc.conexion.php');
	include_once('includes/inc.recetas.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
		<title>La Octava - Recetas</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Playfair+Display:400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/all.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/recetas.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/mobile.css" />
		<link href="<?php echo $ruta; ?>css/jquery.bxslider.css" rel="stylesheet" />
	</head>
	<body>
		<header>
			<div id="header_fix">
				<div class="content">
					<div class="content_mobile">
						<h1><a href="<?php echo $ruta; ?>index.php"><img src="<?php echo $ruta; ?>img/la_octava.png" alt="La Octava" /></a></h1>
						<div id="btn_mobile" class="mobile">
							<img src="<?php echo $ruta; ?>img/btn_mobile.png" alt="BTN Mobile" />
						</div>
					</div>
					<nav>
						<ul>
							<li><a href="<?php echo $ruta; ?>productos.php">Productos</a></li>
							<li><a href="<?php echo $ruta; ?>linea-premium.php">Línea Premium</a></li>
							<li><a href="<?php echo $ruta; ?>recetas.php">Recetas</a></li>
							<li><a href="<?php echo $ruta; ?>historia.html">Historia</a></li>
							<li><a href="<?php echo $ruta; ?>contacto.html">Contacto</a></li>
							<li class="redes"><a href="#facebook" target="_blank"><img src="<?php echo $ruta; ?>img/ico_facebook.png" alt="Facebook" /></a></li>
							<li class="redes"><a href="#twitter" target="_blank"><img src="<?php echo $ruta; ?>img/ico_twitter.png" alt="Twitter" /></a></li>
							<li class="redes"><a href="#youtube" target="_blank"><img src="<?php echo $ruta; ?>img/ico_youtube.png" alt="Youtube" /></a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="header_back">
				<h2>Recetas</h2>
			</div>
		</header>
		<section id="recetas-view">
			<h3>¡Manos a la obra!</h3>
			<p>Crea los platos más originales y sabrosos con nuestra variedad de fiambres.</p>
			<div class="recetas_view_content">
				<?php
					$n = 0;
					if ($sqlRecetas){
					  while ( $recetas = mysqli_fetch_object($sqlRecetas) )
					    {
					    	if( $n % 2 == 0 ){
				?>
					    		<a href="receta.php?receta=<?= $recetas->id ?>"><div class="block_img desktop" style="background-image: url('<?php echo $ruta; ?>img/recetas/<?= $recetas->imgback ?>');">&nbsp;</div></a>
								<div class="block_descipt <?= $recetas->back_color ?>">
									<div class="cont_img"><img src="<?php echo $ruta; ?>img/recetas/<?= $recetas->imgsrc ?>" alt="Arrolladitos de Jamon" /></div>
									<h4><?= utf8_encode($recetas->titulo) ?></h4>
									<hr />
									<div><?= utf8_encode($recetas->descripcion) ?></div>
									<a href="receta.php?receta=<?= $recetas->id ?>">
										<div class="btn_ver_detalle">Ver detalle</div>
									</a>
								</div>
				<?php
					    	}else{
				?>
								<div class="block_descipt <?= $recetas->back_color ?>">
									<div class="cont_img"><img src="<?php echo $ruta; ?>img/recetas/<?= $recetas->imgsrc ?>" alt="Picada Italiana" /></div>
									<h4><?= utf8_encode($recetas->titulo) ?></h4>
									<hr />
									<div><?= utf8_encode($recetas->descripcion) ?></div>
									<a href="receta.php?receta=<?= $recetas->id ?>">
										<div class="btn_ver_detalle btn_<?= $recetas->back_color ?>">Ver detalle</div>
									</a>
								</div>
								<a href="receta.php?receta=<?= $recetas->id ?>"><div class="block_img desktop" style="background-image: url('<?php echo $ruta; ?>img/recetas/<?= $recetas->imgback ?>');">&nbsp;</div></a>
				<?php
					    	}
				?>

				<?php
						$n++;
					    }
					}
				?>
			</div>
		</section>
		<footer>
			<div class="content">
				<div class="left">
					<img src="<?php echo $ruta; ?>img/la_octava_ft.png">
				</div>
				<div class="right">
					<div class="box">
						<img src="<?php echo $ruta; ?>img/ico_tel.png" alt="Tel" class="img_logo" />
						<div class="info">
							<span>Tel: +54 11 4687-9334</span>
							<span>Fax: +54 11 4687-1428</span>
						</div>
					</div>
					<div class="box">
						<img src="<?php echo $ruta; ?>img/ico_address.png" alt="Dirección" class="img_logo" />
						<div class="info">
							<span>Av. Emilio Castro 6228 (C1440CLY)</span>
							<span>Buenos Aires, Argentina</span>
						</div>
					</div>
					<div class="box">
						<img src="<?php echo $ruta; ?>img/ico_mail.png" alt="Mail" class="img_logo" />
						<div class="info">
							<span><a href="mailto:info@laoctava.com.ar">info@laoctava.com.ar</a></span>
						</div>
					</div>
					<div class="box data_fiscal">
						<img src="<?php echo $ruta; ?>img/data_fiscal.jpg" alt="Data Fiscal" />
					</div>
				</div>
			</div>
		</footer>
		<!-- js -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php echo $ruta; ?>js/jquery.bxslider.js"></script>
		<script src="<?php echo $ruta; ?>js/script.js"></script>
	</body>
</html>