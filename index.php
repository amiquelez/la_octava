<?php
	include_once('includes/inc.conexion.php');
	include_once('includes/inc.index.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
		<title>La Octava</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Playfair+Display:400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/all.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/home.css" />
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
			<ul class="fixslider">
			  <li id="slider_1">
			  	<span class="titular">Frigorífico La Octava</span>
			  	<div id="btn_conoce" class="btn_conoce">Conocé más</div>
			  </li>
			</ul>
		</header>
		<section id="productos_destacados">
			<div class="content">
				<h2>Productos destacados</h2>
				<ul class="list_products bxslider_mobile">
					<?php
						if ($sqlProductosDestacados){
						  while ( $productosDestacados = mysqli_fetch_object($sqlProductosDestacados) )
						    {
					?>
						<li>
							<a href="productos/<?= $productosDestacados->urlseo ?>">
								<img src="<?php echo $ruta; ?>img/productos_img/<?= $productosDestacados->imgsrc ?>" alt="Jamon Crudo" />
								<div class="overlay overlay_producto"></div>
								<span class="prod_titular"><?= utf8_encode($productosDestacados->titulo) ?></span>
								<span class="prod_subtit" style="display:none;"><?= utf8_encode($productosDestacados->subtitulo) ?></span>
								<div class="prod_especif">
									<!-- <span>CODIGO: <?= $productosDestacados->codigo ?></span> -->
									<?php
										if( $productosDestacados->peso != "" && $productosDestacados->peso != "doble" ){
									?>
										<span>PESO: <?= $productosDestacados->peso ?>.</span>
									<?php
										}
										if( $productosDestacados->curado != "" ){
									?>
										<span>CURADO: <?= $productosDestacados->curado ?></span>
									<?php
										}
									?>
								</div>
							</a>
						</li>
					<?php
						    }
						  // Free result set
						  mysqli_free_result($sqlProductosDestacados);
						}
					?>
				</ul>
			</div>
		</section>
		<hr class="hr_punteado"/>
		
		<section id="linea_premium">
			<div class="content">
				<div class="left desktop">
					<img src="<?php echo $ruta; ?>img/linea_premium.jpg" alt="Linea Premium" />
				</div>
				<div class="right">
					<h3>Línea Premium</h3>
					<p class="m_bottom_38_mb">Como en Italia, con el mismo conocimiento y tecnología, con nuestra marca Montesano elaboramos un jamón crudo único, rico en proteínas y con bajo de contenido de sal.</p>
					<img src="<?php echo $ruta; ?>img/linea_premium.jpg" alt="Linea Premium" class="mobile img_mb" />
					<img src="<?php echo $ruta; ?>img/montesano.jpg" alt="Montesano" class="logo_medio" />
					<p>Luego de 14 meses de guarda se logra un producto exquisito, de una textura tierna y con un sabor que invita a seguir disfrutándolo.</p>
					<img src="<?php echo $ruta; ?>img/montesano_ft.jpg" alt="Montesano" class="logo_medio" />
				</div>
			</div>
		</section>
		<section id="recetas_destacadas">
			<div class="content">
				<h2>Recetas destacadas</h2>
				<p>Las recetas más ricas para preparar con tus productos favoritos de La Octava.</p>
				<hr />
				<ul class="box_recetas bxslider_mobile">
					<?php	
					if ($sqlRecetasDes){
						$n = 1;
					  while ( $recetasDes = mysqli_fetch_object($sqlRecetasDes) )
					    {
					?>
						<li style="background: transparent url('<?php echo $ruta; ?>img/recetas/<?= $recetasDes->imgback ?>') no-repeat;">
							<a href="receta.php?receta=<?= $recetasDes->id ?>">
								<div class="content_receta">
									<!-- <span class="categoria">CATEGORIA</span> -->
									<span class="receta_titulo"><?= utf8_encode($recetasDes->titulo) ?></span>
									<!-- <span class="receta_date">14 de Agosto de 2016</span> -->
								</div>
								<div class="overlay"></div>
							</a>
						</li>
					<?php	 
								$n++;   	
					    }
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