<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Escenario Tlaxcala</title>

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicon/manifest.json">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="favicon/favicon.ico">
	<meta name="msapplication-config" content="favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="css/style.css">
	<!-- FONT AWESOME -->
	<link href="extra/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="main-container" id="top">

	<?php /*Menú versión móvil*/ ?>
	<nav class="wrap mobile-menu">
		<div class="logo-over"><a href=""><img src="img/logo-menu.svg"></a></div>
		<ul class="menu-container">
			<li id="mob-nav"><a href="">MENÚ</a></li><li></li><li id="mob-soc">
			<a href="">SÍGUENOS</a></li>
		</ul>
		<ul class="navigation">
			<li><a href="#columnas">COLUMNAS</a></li><li>
			<a href="#radio">RADIO</a></li><li>
			<a href="#noticias">NOTICIAS</a><li>
			<a href="#nosotros">NOSOTROS</a></li><li>
			<a href="#acciones">ACCIONES</a></li><li>
			<a href="#galería">GALERÍA</a></li>
		</ul>
		<ul class="socials">
			<li><a href=""><div class="s1"><img src="img/socials/fb.svg" alt="Facebook"></div></a></li><li>
				<a href=""><div class="s2"><img src="img/socials/ig.svg" alt="Instagram"></div></a></li><li>
				<a href=""><div class="s3"><img src="img/socials/tw.svg" alt="Twitter"></div></a></li><li>
				<a href=""><div class="s4"><img src="img/socials/rd1.svg" alt="Red Social"></div></a></li><li>
				<a href=""><div class="s5"><img src="img/socials/yt.svg" alt="YouTube"></div></a></li><li>
				<a href=""><div class="s6"><img src="img/socials/rd2.svg" alt="Red Social"></div></a></li><li>
				<a href=""><div class="s7"><img src="img/socials/sp.svg" alt="Spotify"></div></a></li><li>
				<a href=""><div class="s8"><img src="img/socials/rd3.svg" alt="Red Social"></div></a></li>
		</ul>
	</nav>

	<?php /*Menú versión completa*/ ?>
	<nav class="wrap full-menu">
		<div class="logo-over"><a href=""><img src="img/logo-menu.svg"></a></div>
		<ul class="full-menu-container">
			<li><a href="#columnas">COLUMNAS</a></li><li>
			<a href="#programas">PROGRAMAS</a></li><li>
			<a href="#noticias">NOTICIAS</a></li><li>
			</li><li>
			<a href="#nosotros">NOSOTROS</a></li><li>
			<a href="#acciones">ACCIONES</a></li><li>
			<a href="#recomendación">RECOMENDACIÓN</a></li>
		</ul>
	</nav>

	<?php /*Banner Principal*/ ?>
	<div class="wrap home-banner">
		<img src="img/imagen-web.jpg" alt="Escenario Tlaxcala">
		<img src="img/logo-simple.svg" class="logo-banner-s">
		<img src="img/logo-comp.svg" class="logo-banner-c">
		<div class="socials-full">
			<a href="" class="sf1"><div><img src="img/socials/fb.svg" alt="Facebook"></div></a>
			<a href="" class="sf2"><div><img src="img/socials/tw.svg" alt="Twitter"></div></a>
			<a href="" class="sf3"><div><img src="img/socials/yt.svg" alt="YouTube"></div></a>
			<a href="" class="sf4"><div><img src="img/socials/sp.svg" alt="Spotify"></div></a>
			<a href="" class="sf5"><div><img src="img/socials/ig.svg" alt="Instagram"></div></a>
			<a href="" class="sf6"><div><img src="img/socials/rd1.svg" alt="Red Social"></div></a>
			<a href="" class="sf7"><div><img src="img/socials/rd2.svg" alt="Red Social"></div></a>
			<a href="" class="sf8"><div><img src="img/socials/rd3.svg" alt="Red Social"></div></a>
		</div>
	</div>

	<div class="featured cf">
		<section class="feat-section col-col"> <!-- Featured entries section start -->
			<div class="feat-title">
				<span>Columnas</span>
				<img src="img/custom-headers/ch-columnas.svg">
			</div>

			<?php for ($i=0; $i <3 ; $i++) { // Remove me before releasing!!! ?>
			<div class="cf feat-entry"> <!-- Featured entry start -->
				<div class="feat-picture">
					<a href="#"><img src="http://placehold.it/113x65"></a>
				</div>
				<div class="feat-text">
					<div class="feat-bot-border">
						<h3><a href="#"><img src="img/ico-col.svg" alt="Columnas">Ficciones gatunas</a></h3>
						<span><a href="#">El arriero</a></span>
					</div>
					<div class="feat-excerpt">
						Me gusta escribir ficciones porque me gusta jugar con la brevedad, es hacer de las letras algo pequeño que deje algo grande. El cuento y la novela son muy distintos a estos que yo llamo juegos...
					</div>
					<div class="feat-date">
						<span>18 Abril</span>
						<a href="">Leer más >></a>
					</div>
				</div>
			</div> <!-- Featured entry end -->
			<?php } ?>

		</section> <!-- Featured entries section end -->
		<section class="feat-section col-not"> <!-- Featured entries section start -->
			<div class="feat-title">
				<span>Noticias</span>
				<img src="img/custom-headers/ch-noticias.svg">
			</div>

			<?php for ($i=0; $i <3 ; $i++) { // Remove me before releasing!!! ?>
			<div class="cf feat-entry"> <!-- Featured entry start -->
				<div class="feat-picture">
					<a href="#"><img src="http://placehold.it/113x65"></a>
				</div>
				<div class="feat-text">
					<div class="feat-bot-border">
						<h3><a href="#"><img src="img/ico-not.svg" alt="Noticias">Ficciones gatunas</a></h3>
						<span><a href="#">El arriero</a></span>
					</div>
					<div class="feat-excerpt">
						Me gusta escribir ficciones porque me gusta jugar con la brevedad, es hacer de las letras algo pequeño que deje algo grande. El cuento y la novela son muy distintos a estos que yo llamo juegos...
					</div>
					<div class="feat-date">
						<span>18 Abril</span>
						<a href="">Leer más >></a>
					</div>
				</div>
			</div> <!-- Featured entry end -->
			<?php } ?>

		</section> <!-- Featured entries section end -->
		<section class="feat-section col-acc"> <!-- Featured entries section start -->
			<div class="feat-title">
				<span>Acciones</span>
				<img src="img/custom-headers/ch-acciones.svg">
			</div>

			<?php for ($i=0; $i <3 ; $i++) { // Remove me before releasing!!! ?>
			<div class="cf feat-entry"> <!-- Featured entry start -->
				<div class="feat-picture">
					<a href="#"><img src="http://placehold.it/113x65"></a>
				</div>
				<div class="feat-text">
					<div class="feat-bot-border">
						<h3><a href="#"><img src="img/ico-acc.svg" alt="Acciones">Ficciones gatunas</a></h3>
						<span><a href="#">El arriero</a></span>
					</div>
					<div class="feat-excerpt">
						Me gusta escribir ficciones porque me gusta jugar con la brevedad, es hacer de las letras algo pequeño que deje algo grande. El cuento y la novela son muy distintos a estos que yo llamo juegos...
					</div>
					<div class="feat-date">
						<span>18 Abril</span>
						<a href="">Leer más >></a>
					</div>
				</div>
			</div> <!-- Featured entry end -->
			<?php } ?>

		</section> <!-- Featured entries section end -->
	</div>

	<div class="banner-home-inf">
		<img src="img/joven-tlaxcalteca.jpg">
	</div>

	<div class="contactanos">
		<span>CONTÁCTANOS</span>
		<div class="lower-banners wrap90 cf">
			<a href="#lower-banner1"><img src="http://placehold.it/243x158"></a>
			<a href="#lower-banner2"><img src="http://placehold.it/243x158"></a>
			<a href="#lower-banner3"><img src="http://placehold.it/243x158"></a>
		</div>
		<a href="#top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	</div>

	<footer class="pie">
		<small>2016 Escenario Tlaxcala&copy; Webmaster &amp; Co., todos los derechos reservados</small>
	</footer>
</div>
	
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/actions.min.js"></script>
</body>
</html>