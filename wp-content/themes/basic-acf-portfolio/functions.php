<?php

function custom_styles() {
	wp_register_style('bootstrap','/wp-content/themes/basic-acf-portfolio/vendor/bootstrap/css/bootstrap.min.css',[],1.0,'all');
	wp_register_style('moder-business','/wp-content/themes/basic-acf-portfolio/css/modern-business.css',['bootstrap'],1.0,'all');
	wp_enque_style('bootstrap');
	wp_enque_style('modern-business');	

}

function custom_scripts(){
	wp_register_script('jquery','/wp-content/themes/basic-acf-portfolio/vendor/jquery/jquery.min.js',[],false,false);
	wp_register_script('popper','/wp-content/themes/basic-acf-portfolio/vendor/popper/popper.min.js',['jquery'],false,false);
	wp_register_script('bootstrap','/wp-content/themes/basic-acf-portfolio/vendor/bootstrap/js/bootstrap.min.js',['jquery','popper'],false,false);
	wp_enque_script('jquery');
	wp_enque_script('popper');
	wp_enque_script('bootstrap');

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );