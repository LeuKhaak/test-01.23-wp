<?php
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com' );
	wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css' );
	wp_enqueue_style( 'media360', get_template_directory_uri() . '/assets/media360.css');



	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/scripts.js', array(), 'null', true );
}
);

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>