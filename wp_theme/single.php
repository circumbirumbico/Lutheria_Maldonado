
<!-- POP UP-->
<div class="toPopup detalleProducto relative">
	<div class="cerrar"></div>

	<div id="popup_content"> 

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>     

			<div class="container-fluid">
				<div class="row">

					<div class="col-sm-6 col-xs-12">
						<figure class="big-img">
							<?php echo get_the_post_thumbnail(); ?>
							<figcaption>
								<?php if( has_category('4')) { ?>
									<span class="nuevo">¡Nuevo!</span>
								<?php } ?>
							</figcaption>
						</figure>

						<div class="thumb thumb1">
							<?php echo get_the_post_thumbnail(); ?>
						</div>
						
						<div class="thumb thumb2">
							<?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'segunda-imagen');  endif; ?>
						</div>

						<div class="thumb thumb3">
							<?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'tercera-imagen');  endif; ?>
						</div>

						<div class="thumb thumb4">
							<?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'cuarta-imagen');  endif; ?>
						</div>


					</div>

					<div class="col-sm-6 col-xs-12">									
						<h2><?php the_title(); ?></h2>
						<div class="content"><?php the_content(); ?></div>	
					</div>		

				</div>
			</div>		

		<?php endwhile;endif; ?>	

	</div> 
</div> 

	<div class="loader"></div>
	<div id="backgroundPopup" class="cerrar"></div>
<!-- POP UP-->


<script>

	//muevo la galería dentro de la columna derecha del popUp
	$('.content').find('.gallery').appendTo('.col_right');						

	//cierro el popUp de cada post
	$('.cerrar').on('click', function(){
		 cerrarModal();
	});

	//cierro el popUp si presiono la tecla Esc (Escape)
	$(document).keyup(function(event) {
		if (event.which == 27) { 
			cerrarModal();
		}
	});

	function cerrarModal(){
		$('.toPopup').animate({opacity: 0}).fadeOut();
		$("#backgroundPopup").animate({opacity: 0}).fadeOut();
		setTimeout(function(){ 
			$('#backgroundPopup, .toPopup, .fancybox-overlay').remove();
		}, 500);
	}						


	// cambiar fotos en el popup
	$('.thumb img').click(function(){
		var thumbnail = $(this).attr('src');
		$('.big-img img').attr('srcset', thumbnail);
	});			

</script>	