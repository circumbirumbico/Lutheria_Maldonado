// document ready
$(function(){

//########## Menú ##################

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

	// Menú
	$('header .icono').click(function (e){
		e.preventDefault();

		if( $(this).hasClass('fa-bars') ){
			Abrir();
		} else {
			Cerrar();
		}
	});

//########## Galería ##################

	$('#galeria img').each(function(){
		$(this).wrapAll( "<figure class='col-sm-3'></figure>"); //# envuelvo imágenes
		$(this).parents('a').attr('rel', 'lightbox[roadtrip]'); //# agrego rel
		$(this).parents('a').attr('title', $(this).attr('alt')); //# agrego title a galería
	});

});