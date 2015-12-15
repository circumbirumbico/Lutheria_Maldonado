// document ready
$(function(){

	// abrir menú
	function Abrir(){	
		$('header .icono').removeClass('fa-bars').addClass('fa-times');
		$('nav.responsive').stop().animate({
			left : 0
		});
	}

	// cerrar menú
	function Cerrar(){
		$('header .icono').removeClass('fa-times').addClass('fa-bars');
		$('nav.responsive').stop().animate({
			left : -250
		});
	}

	// Pregunto
	$('header .icono').click(function (e){
		e.preventDefault();

		if( $(this).hasClass('fa-bars') ){
			Abrir();
		} else {
			Cerrar();
		}
	});
		

});