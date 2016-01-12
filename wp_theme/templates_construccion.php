<?php
/*
Template Name: Plantilla de Construcción
*/
?>

<?php get_header(); ?>

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
				<a href="<?php the_permalink() ?>">
					<figure class="construccion">
						<?php echo get_the_post_thumbnail(); ?>
						<figcaption>
							<span>Nuevo!</span>
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