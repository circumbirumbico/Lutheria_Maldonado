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
</head>
<body>

<header>
	<div class="container">
		<nav class="pull-right"> <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ) ?> </nav>
	</div>
</header>