<?php
	include_once('includes/inc.conexion.php');
	include_once('includes/inc.producto_detalle.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
		<title>La Octava - Línea Premium</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Playfair+Display:400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/all.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/producto_detalle.css" />
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
			<div id="header_back" style="background-image: url('<?php echo $ruta; ?>img/<?= $producto->back_header ?>')">
			</div>
		</header>
		<section id="linea_premium_content">
			<div id="view_product">
				<div class="content">
					<div class="top_titular">
						<h2><?= utf8_encode($producto->titulo) ?></h2>
						<span><?= utf8_encode($producto->subtitulo) ?></span>
					</div>
					<div class="top">
						<div class="mobile">
							<img src="<?php echo $ruta; ?>img/montesano_ico.png" alt="Montesano" />
							<hr />
						</div>
						<div class="left">
							<a id="btn_menu" href="<?php echo $ruta; ?>linea-premium.php">MENU</a>
						</div>
						<div class="center desktop">
							<img src="<?php echo $ruta; ?>img/montesano_ico.png" alt="Montesano" />
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
					<hr class="desktop" />
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
					<hr />
					<img src="<?php echo $ruta; ?>img/montesano_ft2.png" alt="Montesano" class="mont_img_inf" />
				</div>
			</div>				
			<div id="recomendaciones_del_chef">
				<div class="content">
					<h3>Recomendaciones del Chef con Jamón Crudo tipo parma</h3>
					<hr />
					<ul class="list_recomd bxslider_mobile">
						<li class="first">
							<img src="<?php echo $ruta; ?>img/recetas/recomendaciones_1.jpg" alt="Recomendaciones">
							<span class="recomd_titular">A page when looking at its layout. The point of using Lorem Ipsum</span>
							<span class="date">14 de Agosto de 2016</span>
						</li>
						<li>
							<img src="<?php echo $ruta; ?>img/recetas/recomendaciones_2.jpg" alt="Recomendaciones">
							<span class="recomd_titular">A page when looking at its layout. The point of using Lorem Ipsum</span>
							<span class="date">14 de Agosto de 2016</span>
						</li>
						<li>
							<img src="<?php echo $ruta; ?>img/recetas/recomendaciones_3.jpg" alt="Recomendaciones">
							<span class="recomd_titular">A page when looking at its layout. The point of using Lorem Ipsum</span>
							<span class="date">14 de Agosto de 2016</span>
						</li>
						<li class="first">
							<img src="<?php echo $ruta; ?>img/recetas/recomendaciones_4.jpg" alt="Recomendaciones">
							<span class="recomd_titular">A page when looking at its layout. The point of using Lorem Ipsum</span>
							<span class="date">14 de Agosto de 2016</span>
						</li>
						<li>
							<img src="<?php echo $ruta; ?>img/recetas/recomendaciones_5.jpg" alt="Recomendaciones">
							<span class="recomd_titular">A page when looking at its layout. The point of using Lorem Ipsum</span>
							<span class="date">14 de Agosto de 2016</span>
						</li>
						<li>
							<img src="<?php echo $ruta; ?>img/recetas/recomendaciones_6.jpg" alt="Recomendaciones">
							<span class="recomd_titular">A page when looking at its layout. The point of using Lorem Ipsum</span>
							<span class="date">14 de Agosto de 2016</span>
						</li>
					</ul>
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
		<script src="<?php echo $ruta; ?>js/script.js"></script>
	</body>
</html>