<?php 

function register_enqueue_style(){
$theme_data = wp_get_theme();

wp_register_style('mitema.css', 'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');

wp_register_style('animate.css', get_theme_file_uri('css/animate.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('icomoon.css', get_theme_file_uri('css/icomoon.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('themify-icons.css', get_theme_file_uri('css/themify-icons.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.css', get_theme_file_uri('css/bootstrap.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('carousel.min.css', get_theme_file_uri('css/owl.carousel.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('owl.theme.default.min.css', get_theme_file_uri('css/owl.theme.default.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('style.css', get_theme_file_uri('css/style.css'), null, $theme_data->get('Version'), 'screen');


wp_enqueue_style('mitema.css');
wp_enqueue_style('animate.css');
wp_enqueue_style('icomoon.css');
 wp_enqueue_style('themify-icons.css');
 wp_enqueue_style('bootstrap.css');
 wp_enqueue_style('carousel.min.css');
 wp_enqueue_style('owl.theme.default.min.css');
 wp_enqueue_style('style.css');

 
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



function register_enqueue_scripts(){
$theme_data = wp_get_theme();


wp_deregister_script('jquery');
wp_deregister_script('jquery_migrate');


wp_register_script('jQuery3', get_parent_theme_file_uri('vendor/jQuery/jQuery.min.js'), array ('jQuery_migrate'), null, true);
wp_register_script('bootstrap', get_parent_theme_file_uri('vendor/bootstrap/js/bootstrap.bundle.min.js'), array ('jQuery3_migrate'), null, true);

wp_enqueue_script('jQuery');
wp_enqueue_script('bootstrap');
 
}
add_action('wp_enqueue_scripts', 'register_enqueue_scripts');
 ?>
 <?php 

if ( function_exists( 'register_nav_menus')) {
	register_nav_menus( array ( 'superior' => 'Menú principal superior'));
}

if ( function_exists('add_theme_support')){
	add_theme_support( 'post-thumbnails');
}

?>
