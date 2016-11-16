<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

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

<div class="main-container">
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
			<li><a href=""><div class="s1"></div></a></li><li>
				<a href=""><div class="s2"></div></a></li><li>
				<a href=""><div class="s3"></div></a></li><li>
				<a href=""><div class="s4"></div></a></li><li>
				<a href=""><div class="s5"></div></a></li><li>
				<a href=""><div class="s6"></div></a></li><li>
				<a href=""><div class="s7"></div></a></li><li>
				<a href=""><div class="s8"></div></a></li>
		</ul>
	</nav>

	<div class="wrap home-banner">
		<img src="http://placehold.it/1024x318">
	</div>

	<div class="featured">
		<section class="feat-section"> <!-- Featured entries section start -->
			<div class="feat-title" style="background: #00A6D7;">
				Columnas
			</div>

			<?php for ($i=0; $i <3 ; $i++) { // Remove me before releasing!!! ?>
			<div class="cf feat-entry"> <!-- Featured entry start -->
				<div class="feat-picture">
					<a href="#"><img src="http://placehold.it/113x65"></a>
				</div>
				<div class="feat-text">
					<div class="feat-bot-border">
						<h3><a href="#">Ficciones gatunas</a></h3>
						<span><a href="#">El arriero</a></span>
					</div>
					<div class="feat-excerpt">
						Me gusta escribir ficciones porque me gusta jugar con la brevedad, es hacer de las letras algo pequeño que deje algo grande. El cuento y la novela son muy distintos a estos que yo llamo juegos...
					</div>
				</div>
			</div> <!-- Featured entry end -->
			<?php } ?>

		</section> <!-- Featured entries section end -->
		<section class="feat-section"> <!-- Featured entries section start -->
			<div class="feat-title" style="background: #1066B0;">
				Noticias
			</div>

			<?php for ($i=0; $i <3 ; $i++) { // Remove me before releasing!!! ?>
			<div class="cf feat-entry"> <!-- Featured entry start -->
				<div class="feat-picture">
					<a href="#"><img src="http://placehold.it/113x65"></a>
				</div>
				<div class="feat-text">
					<div class="feat-bot-border">
						<h3><a href="#">Ficciones gatunas</a></h3>
						<span><a href="#">El arriero</a></span>
					</div>
					<div class="feat-excerpt">
						Me gusta escribir ficciones porque me gusta jugar con la brevedad, es hacer de las letras algo pequeño que deje algo grande. El cuento y la novela son muy distintos a estos que yo llamo juegos...
					</div>
				</div>
			</div> <!-- Featured entry end -->
			<?php } ?>

		</section> <!-- Featured entries section end -->
		<section class="feat-section"> <!-- Featured entries section start -->
			<div class="feat-title" style="background: #EF6B49;">
				Acciones
			</div>

			<?php for ($i=0; $i <3 ; $i++) { // Remove me before releasing!!! ?>
			<div class="cf feat-entry"> <!-- Featured entry start -->
				<div class="feat-picture">
					<a href="#"><img src="http://placehold.it/113x65"></a>
				</div>
				<div class="feat-text">
					<div class="feat-bot-border">
						<h3><a href="#">Ficciones gatunas</a></h3>
						<span><a href="#">El arriero</a></span>
					</div>
					<div class="feat-excerpt">
						Me gusta escribir ficciones porque me gusta jugar con la brevedad, es hacer de las letras algo pequeño que deje algo grande. El cuento y la novela son muy distintos a estos que yo llamo juegos...
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
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</div>

	<footer class="pie">
		<small>2016 Escenario Tlaxcala&copy; Webmaster &amp; Co., todos los derechos reservados</small>
	</footer>
</div>
	
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/actions.min.js"></script>
</body>
</html>