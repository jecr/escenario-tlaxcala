<?php include 'includes/header.php'; ?>

<?php /*Banner Principal*/ ?>
<div class="wrap home-banner">
	<img src="img/section-banners/banner-noticias.jpg" alt="Escenario Tlaxcala">
	<img src="img/logo-simple.svg" class="logo-banner-s">
	<img src="img/logo-comp.svg" class="logo-banner-c">
	<div class="socials-full">
		<a href="" class="sf1"><div><img src="img/socials/fb.svg" alt="Facebook"></div></a>
		<a href="https://twitter.com/EscenarioTlx" class="sf2"><div><img src="img/socials/tw.svg" alt="Twitter"></div></a>
		<a href="" class="sf3"><div><img src="img/socials/yt.svg" alt="YouTube"></div></a>
		<a href="" class="sf4"><div><img src="img/socials/sp.svg" alt="Spotify"></div></a>
		<a href="https://www.instagram.com/EscenarioTlx/" class="sf5"><div><img src="img/socials/ig.svg" alt="Instagram"></div></a>
		<a href="" class="sf6"><div><img src="img/socials/rd1.svg" alt="Red Social"></div></a>
		<a href="" class="sf7"><div><img src="img/socials/rd2.svg" alt="Red Social"></div></a>
		<a href="" class="sf8"><div><img src="img/socials/rd3.svg" alt="Red Social"></div></a>
	</div>
</div>

<div class="featured cf">
	<section class="feat-section col-1"> <!-- Featured entries section start -->
		<div class="feat-title">
			<span>La Nota</span>
			<img src="img/custom-headers/ch-lanota.svg">
		</div>

		<?php for ($i=0; $i <3 ; $i++) { // Remove me before releasing!!! ?>
		<div class="cf feat-entry"> <!-- Featured entry start -->
			<div class="feat-picture">
				<a href="entrada.php"><img src="http://placehold.it/113x65"></a>
			</div>
			<div class="feat-text">
				<div class="feat-bot-border">
					<h3><a href="entrada.php"><img src="img/ico-col.svg" alt="Columnas">Ficciones gatunas</a></h3>
					<span><a href="entrada.php">El arriero</a></span>
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
	<section class="feat-section col-2"> <!-- Featured entries section start -->
		<div class="feat-title">
			<span>Eventos</span>
			<img src="img/custom-headers/ch-eventos.svg">
		</div>

		<?php for ($i=0; $i <3 ; $i++) { // Remove me before releasing!!! ?>
		<div class="cf feat-entry"> <!-- Featured entry start -->
			<div class="feat-picture">
				<a href="entrada.php"><img src="http://placehold.it/113x65"></a>
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
	<section class="feat-section col-3"> <!-- Featured entries section start -->
		<div class="feat-title">
			<span>Encuesta</span>
			<img src="img/custom-headers/ch-encuesta.svg">
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
</div>

<?php include 'includes/footer.php'; ?>