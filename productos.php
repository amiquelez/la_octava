<?php
	include_once('includes/inc.conexion.php');
	include_once('includes/inc.productos.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
		<title>La Octava - Productos</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Playfair+Display:400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/all.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/productos.css" />
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
			</div>
		</header>
		<section id="linea_premium_content">
			<div class="content">
				<h2>Productos</h2>
				<nav class="list_filters">
					<ul>
						<li class="actual"><a href="javascript:void(0);" id="btn_crudos">Crudos</a></li>
						<li><a href="javascript:void(0);" id="btn_cocidos">Cocidos</a></li>
						<li><a href="javascript:void(0);" id="btn_secos">Secos</a></li>
						<li><a href="javascript:void(0);" id="btn_embutidos">Embutidos</a></li>
						<li><a href="javascript:void(0);" id="btn_otros">Otros</a></li>
					</ul>
				</nav>
				<ul class="list_products">
				<?php
					if ($sqlProductos){
						$n = 0;
					  while ( $producto = mysqli_fetch_object($sqlProductos) )
					    {
				?>
					<li class="<?= $categoria[$producto->categoria] ?> <?php if( $n % 4 == 0 ){ ?>first <?php } ?>">
						<a href="productos/<?= $producto->urlseo ?>">
							<img src="<?php echo $ruta; ?>img/productos_img/<?= $producto->imgsrc ?>" alt="Bondiola" />
							<div class="overlay overlay_producto"></div>
							<span class="prod_titular"><?= utf8_encode($producto->titulo) ?></span>
							<span class="prod_subtit" style="display:none;"><?= utf8_encode($producto->subtitulo) ?></span>
							<div class="prod_especif">
								<?php
									if( $producto->codigo != "" ){
								?>
								<span style="display:none;">CODIGO: <?= $producto->codigo ?></span>
								<?php
									}
									if( $producto->peso != "" && $producto->peso != "doble" ){
								?>
								<span>PESO: <?= $producto->peso ?>.</span>
								<?php
									}
									if( $producto->curado != "" ){
								?>
								<span>CURADO: <?= $producto->curado ?></span>
								<?php
									}
								?>
							</div>
						</a>
					</li>
				<?php
						$n++;
					    }
					  // Free result set
					  mysqli_free_result($sqlProductos);
					}
				?>
				</ul>
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