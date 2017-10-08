<?php
function custom_title(){
	return wp_title(). ' | '. get_bloginfo('name').' ~ '.get_bloginfo('description');
}

add_action('init','register_menus');

function register_menus(){
	register_nav_menus([
		'Header Menu'=>'main menu for the top of the page'
	]);
}

