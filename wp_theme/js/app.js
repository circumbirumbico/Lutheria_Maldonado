$(function(){

	// abrir menú
	function Abrir(){	
		$('header .icono').removeClass('icono-menu').addClass('icono-cerrar');
		$('nav.responsive').stop().animate({
			left : 0
		});
	}

	// cerrar menú
	function Cerrar(){
		$('header .icono').removeClass('icono-cerrar').addClass('icono-menu');
		$('nav.responsive').stop().animate({
			left : -250
		});
	}

	// Pregunto
	$('header .icono').click(function (e){
		e.preventDefault();

		if( $(this).hasClass('icono-menu') ){
			Abrir();
		} else {
			Cerrar();
		}
	});
		

});