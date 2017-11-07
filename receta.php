<?php
	include_once('includes/inc.conexion.php');
	include_once('includes/inc.receta.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
		<title>La Octava - Arrolladitos de Jamón Crudo y Queso Parmesano</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Playfair+Display:400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/all.css" />
		<link rel="stylesheet" href="<?php echo $ruta; ?>css/receta.css" />
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
				<h2 class="size_40 padding_180"><?= utf8_encode($receta->titulo) ?></h2>
			</div>
		</header>
		<section id="view-receta">
			<div class="content">
				<div class="redes">
					<!-- <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwwwadyouwish.com%2Fla_octava/" target="_blank"><img src="<?php echo $ruta; ?>img/btn_facebook.png" alt="Facebook" /></a>	 -->
					<img src="<?php echo $ruta; ?>img/btn_facebook.png" alt="Facebook" />
					<img src="<?php echo $ruta; ?>img/btn_twitter.png" alt="Twitter" />
					<!-- <a href="https://twitter.com/intent/tweet?text=Espectacular%20la%20Nueva%20Sportage%20entrá%20a%20&url=http%3A%2F%2Fwww.kia.com.uy%2Fsportage2016" target="_blank"><img src="<?php echo $ruta; ?>img/btn_twitter.jpg" alt="Twitter" /></a> -->
				</div>
				<div class="data">
					<h3>Ingredientes</h3>
					<ul class="list_style_1">
						<?= utf8_encode($receta->ingredientes) ?>
					</ul>
				</div>
				<div class="data">
					<h3>Preparación</h3>
					<span class="data_info"><span class="dest">Preparación:</span> <?= utf8_encode($receta->preparacion_tiempo) ?> &nbsp;&rsaquo;&nbsp; <span class="dest">Tiempo de cocción:</span> <?= utf8_encode($receta->preparacion_tiempo_coccion) ?> &nbsp;&rsaquo;&nbsp; <span class="dest">Listo en:</span> <?= utf8_encode($receta->preparacion_listo) ?> </span>
					<?= utf8_encode($receta->preparacion) ?>
				</div>
			</div>
		</section>
		<section id="recetas_relacionadas">
			<div class="content">
				<hr class="sep_dashed desktop" />
				<h2>Recetas relacionadas</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<hr class="sep_dashed" />
				<ul class="relacionadas bxslider_mobile">
				<?php	
					if ($sqlRecetasRel){
					  while ( $recetasRel = mysqli_fetch_object($sqlRecetasRel) )
					    {
				?>
					<li>
						<a href="receta.php?receta=<?= $recetasRel->id ?>">
							<?php
								if( $receta->premium == 1 ){
							?>							
								<img src="<?php echo $ruta; ?>img/recetas/<?= $recetasRel->imgsrc ?>" alt="Receta" />
							<?php
								}else{
							?>
								<img src="<?php echo $ruta; ?>img/recetas/<?= $recetasRel->imgback ?>" alt="Receta" />
							<?php		
								}
							?>
							<div class="overlay <?php if( $receta->premium == 1 ){ ?>overlay_h_80<?php }else{ ?>overlay_h_85<?php } ?>"></div>
							<h4><?= utf8_encode($recetasRel->titulo) ?></h4>
							<!-- <p><?= $recetasRel->fecha ?></p> -->
						</a>
					</li>
				<?php	    	
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