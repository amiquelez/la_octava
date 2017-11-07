<?php
	include_once('includes/inc.conexion.php');
	include_once('includes/inc.linea_premium.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
		<title>La Octava - Línea Premium</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Playfair+Display:400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/all.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/linea_premium.css" />
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
				<h2>Línea Premium</h2>
				<img src="<?php echo $ruta; ?>img/montesano_2.jpg" alt="Montesano" class="mont_img_sup" />
				<p>Conozca todos los exquisitos productos de la línea Montesano, nuestra marca Premium.</p>
				<img src="<?php echo $ruta; ?>img/montesano_ft2.png" alt="Montesano" class="mont_img_inf" />
				<ul class="list_products">
					<?php
						if ($sqlProductosPremium){
						  while ( $productoPremium = mysqli_fetch_object($sqlProductosPremium) )
						    {
					?>
						<li>
							<a href="montesano/<?= $productoPremium->urlseo ?>">
								<img src="<?php echo $ruta; ?>img/productos_img/<?= $productoPremium->imgsrc ?>" alt="Bondiola" />
								<span class="prod_titular"><?= utf8_encode($productoPremium->titulo) ?></span>
								<span class="prod_subtit" style="display:none;"><?= utf8_encode($productoPremium->subtitulo) ?></span>
								<div class="prod_especif">
									<!-- <span>CODIGO: <?= $productoPremium->codigo ?></span> -->
									<?php
										if( $productoPremium->peso != "" && $productoPremium->peso != "doble" ){
									?>
									<span>PESO: <?= $productoPremium->peso ?>.</span>
									<?php
										}
										if( $productoPremium->curado != "" ){
									?>
									<span>CURADO: <?= $productoPremium->curado ?></span>
									<?php
										}
									?>
								</div>
							</a>
						</li>
					<?php
						    }
						  // Free result set
						  mysqli_free_result($sqlProductosPremium);
						}
					?>
				</ul>
			</div>
			<div id="recomendaciones_del_chef">
				<div class="content">
					<h3>Recomendaciones del Chef</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<hr />
					<ul class="list_recomd bxslider_mobile">
						<?php
							if ($sqlRecetasPremium){
								$n = 0;
							  while ( $recetasPremium = mysqli_fetch_object($sqlRecetasPremium) )
							    {
						?>
						<li <?php if( $n == 0 ){ ?>class="first"<?php } ?>>
							<a href="receta.php?receta=<?= $recetasPremium->id ?>">
								<img src="<?php echo $ruta; ?>img/recetas/<?= $recetasPremium->imgsrc ?>" alt="Recomendaciones">
								<span class="recomd_titular"><?= utf8_encode($recetasPremium->titulo) ?></span>
								<!-- <span class="date">14 de Agosto de 2016</span> -->
							</a>
						</li>
						<?php
								$n++;
							    }
							  // Free result set
							  mysqli_free_result($sqlRecetasPremium);
							}
						?>
					</ul>
				</div>
			</div>
		</section>
		<section id="banner_premium">
			<!-- <h3>There are many variations of Lorem Ipsum </h3> -->
			<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing </p> -->
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