<?php get_header(); ?>

<header>
	<div class="container"></div>
</header>

<!-- omar-maldonado -->
<section id="omar-maldonado">
	<div class="container">
		<div class="row">

			<div class="col-sm-4">
				<figure class="circulo">
					<?php echo get_the_post_thumbnail(22) ?>
				</figure>
			</div>

			<div class="col-sm-8">
				<h1><?php echo get_the_title(22) ?></h1>
				<?php 
					$my_postid = 22;
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
	<h2><?php echo get_the_title(16) ?></h2>
	<div class="container-fluid">

		<div class="row">			
			<?php 
				$my_postid = 16;
				$content_post = get_post($my_postid);
				$content = $content_post->post_content;
				$content = apply_filters('the_content', $content);
				echo $content;
			?>
		</div>

	</div>
</section>

<!-- inicios -->
<section id="inicios">
	<h2><?php echo get_the_title(24) ?></h2>

	<?php 
		$my_postid = 24;
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		echo $content
	?>
 
	<a href="<?php bloginfo('url'); ?>/historia" class="btn">Leer más</a>
</section>

<!-- luthier -->
<section id="luthier">
	<h2>Omar Maldonado</h2>
	<?php 
		$my_postid = 26;
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		echo $content
	?>
	<a href="https://www.youtube.com/watch?v=b5MP-vw1Az8" class="fancybox-youtube btn">Ver video</a>
</section>

<!-- testimonio -->
<section id="testimonio">
	<?php 
		$my_postid = 28;
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		echo $content
	?>
</section>
	
<?php get_footer(); ?>