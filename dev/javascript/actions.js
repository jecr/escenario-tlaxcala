
/**
* MOBILE: Navegación y Sociales
*/
$('#mob-nav').on('click', function(e){
	e.preventDefault();
	$('.socials').hide();
	$('.navigation').toggle();
});

$('#mob-soc').on('click', function(e){
	e.preventDefault();
	$('.navigation').hide();
	$('.socials').toggle();
});
