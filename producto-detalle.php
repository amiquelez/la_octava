<?php
	include_once('includes/inc.conexion.php');
	include_once('includes/inc.producto_detalle.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
		<title>La Octava</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Playfair+Display:400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/all.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/producto_detalle.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/mobile.css" />
		<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css" media="screen">
		<link href="<?php echo $ruta; ?>css/jquery.bxslider.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/swipebox.css">
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
			<div id="header_back" style="background-image: url('<?php echo $ruta; ?>img/<?= $producto->back_header ?>')">
			</div>
		</header>
		<section id="linea_regular_content">
			<div id="view_product">
				<div class="content">
					<div class="top_titular">
						<h2><?= utf8_encode($producto->titulo) ?></h2>
						<span><?= utf8_encode($producto->subtitulo) ?></span>
					</div>
					<div class="top">
						<div class="left">
							<a id="btn_menu" href="<?php echo $ruta; ?>productos.php">MENU</a>
						</div>
						<div class="right">
							<?php
								if( $productoPrev->premium == 1 ){
							?>
								<div id="btn_prev" class="btn_sty"><a href="<?php echo $ruta; ?>montesano/<?= $productoPrev->urlseo ?>">Anterior</a></div>
							<?php
								}else{
							?>
								<div id="btn_prev" class="btn_sty"><a href="<?php echo $ruta; ?>productos/<?= $productoPrev->urlseo ?>">Anterior</a></div>
							<?php
								}
								if( $productoNext->premium == 1 ){
							?>
								<div id="btn_next" class="btn_sty btn_sty_over"><a href="<?php echo $ruta; ?>montesano/<?= $productoNext->urlseo ?>">Siguiente</a></div>
							<?php
								}else{
							?>
								<div id="btn_next" class="btn_sty btn_sty_over"><a href="<?php echo $ruta; ?>productos/<?= $productoNext->urlseo ?>">Siguiente</a></div>
							<?php
								}
							?>
						</div>
					</div>
					<hr class="hr_regular" />
					<div class="view_product_content">
						<div class="left">
							<img src="<?php echo $ruta; ?>img/productos_img/<?= $producto->imgsrc ?>" alt="Montesano" />
						</div>
						<div class="right">
							<p class="txt_1 desktop"><?= utf8_encode($producto->descripcion) ?></p>
							<hr class="hr_sub" />
							<?php
								if( $producto->curado != "" ){
							?>
							<div class="data_info">
								<img src="<?php echo $ruta; ?>img/ico_curado.png" alt="Curado" />
								<span class="tit">CURADO:</span>
								<span class="desc"><?= $producto->curado ?></span>
							</div>
							<hr class="hr_sub" />
							<?php
								}

								if( $producto->peso == "doble" ){
							?>
							<div class="data_info_box">
								<div class="data_info_box_left">
									<div class="tit_box">FORMATO TRADICIONAL</div>
									<div class="data_info">
										<img src="<?php echo $ruta; ?>img/ico_peso.png" alt="Peso" />
										<span class="tit">PESO:</span>
										<span class="desc"><?= $producto->peso_tradicional ?></span>
									</div>
									<hr class="hr_sub" />
									<div class="data_info">
										<img src="<?php echo $ruta; ?>img/ico_codigo.png" alt="Codigo" />
										<span class="tit">CÓDIGO:</span>
										<span class="desc"><?= $producto->codigo_tradicional ?></span>
									</div>
									<hr class="hr_sub" />
								</div>
								<div class="data_info_box_right">
									<div class="tit_box">FORMATO RECTANGULAR</div>
									<div class="data_info">
										<img src="<?php echo $ruta; ?>img/ico_peso.png" alt="Peso" />
										<span class="tit">PESO:</span>
										<span class="desc"><?= $producto->peso_rectangular ?></span>
									</div>
									<hr class="hr_sub" />
									<div class="data_info">
										<img src="<?php echo $ruta; ?>img/ico_codigo.png" alt="Codigo" />
										<span class="tit">CÓDIGO:</span>
										<span class="desc"><?= $producto->codigo_rectangular ?></span>
									</div>
									<hr class="hr_sub" />
								</div>
							</div>
							<?php
								}else{

								if( $producto->peso != "" ){
							?>
							<div class="data_info">
								<img src="<?php echo $ruta; ?>img/ico_peso.png" alt="Peso" />
								<span class="tit">PESO:</span>
								<span class="desc"><?= $producto->peso ?></span>
							</div>
							<hr class="hr_sub" />
							<?php
								}
								if( $producto->codigo != "" ){
							?>
							<div class="data_info">
								<img src="<?php echo $ruta; ?>img/ico_codigo.png" alt="Codigo" />
								<span class="tit">CÓDIGO:</span>
								<span class="desc"><?= $producto->codigo ?></span>
							</div>
							<hr class="hr_sub" />
							<?php
								}
							}
							?>
							<p class="txt_1 mobile"><?= utf8_encode($producto->descripcion) ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="galery-producto">
			<div class="content">
				<h3>Galería del producto</h3>
				<ul>
					<?php
							$n = 0;
						while ( $galeria = mysqli_fetch_object($sqlGaleriaProducto) ){
					?>
					<li <?php if($n % 4 == 0){ ?>class="first"<?php } ?>>
						<a href="<?php echo $ruta; ?>img/productos_img/galeria/<?= $galeria->img_src ?>" class="swipebox">
							<img src="<?php echo $ruta; ?>img/productos_img/galeria/<?= $galeria->thumb ?>" alt="image">
							<div class="overlay overlay_producto"></div>
						</a>
					</li>
					<?php
							$n++;
						}
					?>
				</ul>
			</div>
		</section>
		<section id="view-recetas" style="display:none">
			<h2>Recetas con Jamón Crudo</h2>
			<hr />
			<div class="carousel" data-flickity>
			  <div class="carousel-cell">
				  <a href="#">
					  <div id="carousel_rec_1">
					  	<h3>Ensalada de espinaca, higos y jamón crudo</h3>
					  </div>
					  <div class="overlay_slider"></div>
				  </a>
			  </div>
			  <div class="carousel-cell">
				  <a href="#">
				  	<div id="carousel_rec_2">
					  	<h3>Risoto a la italiana</h3>
					</div>
					<div class="overlay_slider"></div>
				   </a>
			  </div>
			  <div class="carousel-cell">
				  <a href="#">
				  	<div id="carousel_rec_3">
				  		<h3>Ensalada de rucula, pepino y tomate</h3>
					</div>
					<div class="overlay_slider"></div>
				  </a>
			  </div>
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
		<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
		<script src="<?php echo $ruta; ?>js/flickity.carousel.js"></script>
		<script src="<?php echo $ruta; ?>js/script.js"></script>
		<script src="<?php echo $ruta; ?>js/jquery.swipebox.js"></script>
		<script>
			;( function( $ ) {

				$( '.swipebox' ).swipebox();

			} )( jQuery );
		</script>
	</body>
</html>