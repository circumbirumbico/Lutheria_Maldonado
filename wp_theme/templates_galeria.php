<?php
/*
Template Name: Plantilla de Galeria
*/
?>

<?php get_header(); ?>

<header id="cabecera-construccion"></header>

<h1 class="interno">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php echo get_the_title(27) ?>
			</div>
		</div>
	</div>
</h1>

<!-- galeria -->
<section id="galeria" class="page-galeria nopadding">
	<div class="container-fluid">

		<div class="row">			
			<?php 
				$my_postid = 27;
				$content_post = get_post($my_postid);
				$content = $content_post->post_content;
				$content = apply_filters('the_content', $content);
				echo $content;
			?>
		</div>

	</div>
</section>

<?php get_footer(); ?>