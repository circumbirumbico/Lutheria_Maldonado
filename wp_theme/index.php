<?php get_header(); ?>

<!-- omar-maldonado -->
<section id="omar-maldonado">
	<div class="container">
		<div class="row">

			<div class="col-sm-4">
				<figure>
					<?php echo get_the_post_thumbnail(29) ?>
				</figure>
			</div>

			<div class="col-sm-8">
				<h1><?php echo get_the_title(29) ?></h1>
				<?php 
					$my_postid = 29;
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					echo $content
				?>
			</div>
		</div>
	</div>
</section>

<!-- galeria -->
<section id="galeria">
	<h2>Galería</h2>
	<div class="container-fluid">

		<div class="row">
			<figure class="col-sm-3">
				<span class="fa fa-picture-o"></span>
				<img src="<?php bloginfo('template_directory') ?>/img/galeria.jpg" alt="">
			</figure>
			<figure class="col-sm-3">
				<span class="fa fa-picture-o"></span>
				<img src="<?php bloginfo('template_directory') ?>/img/galeria2.jpg" alt="">
			</figure>
			<figure class="col-sm-3">
				<span class="fa fa-picture-o"></span>
				<img src="<?php bloginfo('template_directory') ?>/img/galeria.jpg" alt="">
			</figure>
			<figure class="col-sm-3">
				<span class="fa fa-picture-o"></span>
				<img src="<?php bloginfo('template_directory') ?>/img/galeria2.jpg" alt="">
			</figure>
		</div>	

		<div class="row">
			<figure class="col-sm-3">
				<span class="fa fa-picture-o"></span>
				<img src="<?php bloginfo('template_directory') ?>/img/galeria2.jpg" alt="">
			</figure>
			<figure class="col-sm-3">
				<span class="fa fa-picture-o"></span>
				<img src="<?php bloginfo('template_directory') ?>/img/galeria.jpg" alt="">
			</figure>
			<figure class="col-sm-3">
				<span class="fa fa-picture-o"></span>
				<img src="<?php bloginfo('template_directory') ?>/img/galeria2.jpg" alt="">
			</figure>
			<figure class="col-sm-3">
				<span class="fa fa-picture-o"></span>
				<img src="<?php bloginfo('template_directory') ?>/img/galeria.jpg" alt="">
			</figure>
		</div>	

	</div>
</section>

<!-- inicios -->
<section id="inicios">
	<h2><?php echo get_the_title(32) ?></h2>

	<?php 
		$my_postid = 32;
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		echo $content
	?>
 
	<button>Leer más</button>
</section>

<!-- luthier -->
<section id="luthier">
	<h2>Omar Maldonado</h2>
	<?php 
		$my_postid = 38;
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		echo $content
	?>
	<button>Ver video</button>
</section>

<!-- testimonio -->
<section id="testimonio">
	<?php 
		$my_postid = 34;
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		echo $content
	?>
</section>
	
<?php get_footer(); ?>