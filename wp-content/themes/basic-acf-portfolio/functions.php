
<?php
function custom_title(){
	$name = get_bloginfo ('name');
	$description = get_bloginfo ('description');
	$page_title = wp_title('|', true, 'right');
	$title = $page_title . $name . ' ~ ' . $description;
	return $title;
}
function excerpt($content, $length = 180) {
	$content = wp_strip_all_tags($content);
	$content = substr($content, 0, $length);
	echo $content;
}
add_action('init', 'register_menus');
function register_menus() {
	register_nav_menus([
		'main-menu' => 'Main Menu top of the page'
	]);
}
add_action('wp_enqueue_scripts','custom_styles');
function custom_styles() {
	wp_register_style(
		'bootstrap',
		get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css', 
		[], 
		4.0
		
	);
	wp_register_style(
		'modern-business',
		get_template_directory_uri().'/css/modern-business.css',
		['bootstrap'],
		1.0
	);
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('modern-business');
}
add_action('wp_enqueue_scripts','custom_scripts');
function custom_scripts () {
	wp_register_script(
		'jQuery',
		get_template_directory_uri().'/vendor/jquery/jquery.min.js',
		[],
		3.21,
		false
	);
	wp_register_script(
		'popper',
		get_template_directory_uri().'/vendor/popper/popper.min.js',
		[],
		1.111,
		true
	);
	wp_register_script(
		'bootstrap',
		get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js',
		[],
		4.0,
		true
	);
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('jQuery');
	wp_enqueue_script('popper');
	
}

// $name, $width,$crop
add_image_size('Portfolio Featured', 700, 500, true);



?>