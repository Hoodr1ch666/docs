<?php 

add_action( 'wp_enqueue_scripts',function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	



	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js',  array(),  'null', true );
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link rel="stylesheet" href="css/style.min.css">  -->
   <!-- wp_enqueue_style( 'style','href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'); -->
   <!-- array('jquery'),  -->
 