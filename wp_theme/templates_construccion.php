<?php
/*
Template Name: Plantilla de Construcción
*/
?>

<?php get_header(); ?>

<div class="cargandotodo"></div>

<script>
	$(function(){

		$(".modalbox").on("click", function (thumb){
			thumb.preventDefault();
			$('.loading').fadeIn();
			var laUrl = $(this).attr('href');


			$.get( laUrl, function (data) {
				$('.loading').fadeOut();
				$( ".cargandotodo" ).html(data);
				$('#backgroundPopup').animate({opacity: 0.8}).fadeIn(400);
				$('.toPopup').animate({opacity: 1}).fadeIn(400);
			}); //fin get

		}); //fin modalbox

	}); //fin funcion
</script>

<div class="loading none center">
cargando...
	<div class="spinner">
	  <div class="rect1"></div>
	  <div class="rect2"></div>
	  <div class="rect3"></div>
	  <div class="rect4"></div>
	  <div class="rect5"></div>
	</div>
</div>

<!-- template -->

<header id="cabecera-construccion"></header>

<h1 class="interno">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				Proceso de <strong>Construcción</strong>
			</div>
		</div>
	</div>
</h1>

<!-- construcción -->
<section id="construccion">
	<div class="container-fluid">
		<div class="row">	

		<?php 
			query_posts('cat=3'); 
			while (have_posts()) : the_post();
		?>

			<div class="col-sm-3">
				<a href="<?php the_permalink() ?>" class="modalbox">
					<figure class="construccion">
						<?php echo get_the_post_thumbnail(); ?>
						<figcaption>
							<?php if( has_category('4')) { ?>
							<span>¡Nuevo!</span>
							<?php } ?>
						</figcaption>


						<div class="detalle">
							<?php the_content(); ?>
						</div>

						<img src="<?php bloginfo('template_directory') ?>/img/cerrar.png" alt="cerrar" class="cerrar-detalle">
					</figure>				
					<h4 class="nombre-producto"><?php echo get_the_title(); ?></h4>
				</a>
			</div>
				
		<?php endwhile; ?>

		
		</div>
	</div>
</section>

<?php get_footer(); ?>