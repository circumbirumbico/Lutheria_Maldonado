<?php

	// Declaramos el menu 1.
	add_theme_support( 'menus' );
	register_nav_menu( 'primary', __( 'Primary Menu', 'Menu Cabecera' ) );

	// remove_filter('the_content', 'wpautop');
	// remove_filter('the_excerpt', 'wpautop');

/*ESTO HACE QUE ESE MUESTREN LOS POSTS COMO THUMBNAILS, ES DECIR, COMO IM�GENES QUE AL SER CLICKEADAS, VAN A LA URL DEL POST*/
	add_theme_support( 'post-thumbnails' ); 

//wordpress Esta página web tiene un bucle de redireccionamiento
remove_filter('template_redirect', 'redirect_canonical');


if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Segunda Imagen',
            'id' => 'segunda-imagen',
            'post_type' => 'post'
        )
    );

    new MultiPostThumbnails(
        array(
            'label' => 'Tercera Imagen',
            'id' => 'tercera-imagen',
            'post_type' => 'post'
        )
    );

    new MultiPostThumbnails(
        array(
            'label' => 'Cuarta Imagen',
            'id' => 'cuarta-imagen',
            'post_type' => 'post'
        )
    );
}





//eliminando basura
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function footer_enqueue_scripts() { 
    remove_action('wp_head', 'wp_print_scripts'); 
    remove_action('wp_head', 'wp_enqueue_scripts', 1); 
    remove_action('wp_head', 'wp_print_head_scripts', 9); 
    add_action('wp_footer', 'wp_print_scripts', 5); 
    add_action('wp_footer', 'wp_enqueue_scripts', 5); 
    add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 

add_action('after_setup_theme', 'footer_enqueue_scripts'); 

?>
