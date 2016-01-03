<?php
/*
Template Name: Plantilla de Historia
*/
?>

<?php get_header(); ?>

<header id="cabecera-historia"></header>

<h1 id="titulo-historia" class="interno">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				Mí <strong>Historia</strong>, inicios en la Luthería
			</div>
		</div>
	</div>
</h1>

<!-- omar-maldonado -->
<section id="historia">
	<div class="container">
		<div class="row">	

			<div class="col-sm-4">
				<figure class="circulo">
					<?php echo get_the_post_thumbnail(9) ?>
				</figure>
			</div>

			<div class="col-sm-8">
				<?php 
					$my_postid = 9;
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					echo $content
				?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>