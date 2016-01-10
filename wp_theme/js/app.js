// document ready
$(function(){

//########## Menú ##################

	// abrir menú
	function Abrir(){	
		$('.topbar .icono').removeClass('fa-bars').addClass('fa-times');
		$('nav.responsive').stop().animate({
			left : 0
		});
	}

	// cerrar menú
	function Cerrar(){
		$('.topbar .icono').removeClass('fa-times').addClass('fa-bars');
		$('nav.responsive').stop().animate({
			left : -250
		});
	}

	// Menú
	$('.topbar .icono').click(function (e){
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
	
	


//########## Construcción ##################
	$('figure.construccion figcaption').click(function (e){
		e.preventDefault();
		$(this).animate({'opacity' : 0});
		$(this).find('span').animate({'opacity' : 0});

		$(this).parent().find('.detalle').animate({
			'opacity' : 1,
			'top' : 0
		});

		$(this).parent().find('.cerrar-detalle').animate({
			'opacity' : 1
		});

	});


	$('.cerrar-detalle').click(function(){
		$(this).parents('figure.construccion').find('figcaption, span').animate({'opacity': 1});
		$(this).parents('figure.construccion').find('.detalle').animate({
			'opacity': 0,
			'top' : 300
		});
		$(this).animate({'opacity' : 0});

	});

});