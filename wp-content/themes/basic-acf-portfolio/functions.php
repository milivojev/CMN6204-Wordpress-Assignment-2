<?php
function custom_styles(){
	wp_register_style('bootstrap', '/wp-content/themes/basic-acf-portfolio/vendor/bootstrap/css/bootstrap.min.css',[], 1.0, false);
	wp_register_style('modern-business', '/wp-content/themes/basic-acf-portfolio/css/modern-business.css',['bootstrap'], 1.0, false);
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('modern-business');

}

function custom_scripts(){
	wp_register_script('jquery','/wp-content/themes/basic-acf-portfolio/vendor/jquery/jquery.min.js',[],false,false);
	wp_register_script('popper','/wp-content/themes/basic-acf-portfolio/vendor/popper/popper.min.js',['jquery'],false,false);
	wp_register_script('bootstrap','/wp-content/themes/basic-acf-portfolio/vendor/bootstrap/js/bootstrap.min.js',['jquery','popper'],false,false);
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrap');

}
// preispitaj milivoje zasto ovo mora ovako
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

function custom_title(){
	$title = get_bloginfo('name');
	$desc = get_bloginfo('description');
	$page_title = wp_title('|',true,'right');

	// if(get_title() == null){

	// }

	$result = $page_title . $title . " ~ ". $desc;

}

add_action('init','register_my_menus');

function register_my_menus(){
	register_nav_menus(['main-menu'=>'main menu for the top of the page']);
}

