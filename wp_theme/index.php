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
					<?php echo get_the_post_thumbnail(24) ?>
				</figure>
			</div>

			<div class="col-sm-8">
				<h1><?php echo get_the_title(24) ?></h1>
				<?php 
					$my_postid = 24;
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
	<h2><?php echo get_the_title(27) ?></h2>
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

<!-- inicios -->
<section id="inicios">
	<h2><?php echo get_the_title(35) ?></h2>

	<?php 
		$my_postid = 35;
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		echo $content
	?>
 
	<a href="/historia" class="btn">Leer más</a>
</section>

<!-- luthier -->
<section id="luthier">
	<h2>Omar Maldonado</h2>
	<?php 
		$my_postid = 37;
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
		$my_postid = 39;
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		echo $content
	?>
</section>
	
<?php get_footer(); ?>