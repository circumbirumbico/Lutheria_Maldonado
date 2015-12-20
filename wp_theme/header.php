<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name') ?></title>
	<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1">
	<meta name="description" content="<?php echo bloginfo('description') ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head() ?>
</head>
<body>

<div class="topbar">
	<div class="container">

		<?php if( is_page() ) {  // Muestra el logo en el topbar sólo en páginas interiores ?>
			<figure class="pull-left">
				<img src="<?php bloginfo('template_directory') ?>/img/lutheria-maldonado.png" alt="<?php bloginfo('name') ?>">
			</figure>
		<?php } ?>

		<nav class="pull-right"> 
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ) ?>
		</nav>

		<i class="icono fa fa-bars"></i>

		<nav class="responsive"> 
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ) ?> 
		</nav>
	</div>
</div>