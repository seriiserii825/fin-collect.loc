<?php 

add_action( 'wp_enqueue_scripts', 'action_function_name_7714' );
function action_function_name_7714(){
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style('style', get_stylesheet_uri());

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', ['jquery'], null, true);
	wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', ['jquery'], null, true);
	wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', ['jquery'], null, true);
	wp_enqueue_script('masked_input', get_template_directory_uri() . '/js/jquery.maskedinput.js', ['jquery'], null, true);
	wp_enqueue_script('plugin_scroll', get_template_directory_uri() . '/js/plugins-scroll.js', ['jquery'], null, true);
	wp_enqueue_script('onReady', get_template_directory_uri() . '/js/onReady.js', ['jquery'], null, true);

}