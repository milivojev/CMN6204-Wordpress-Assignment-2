<?php
// Template Name: Query Practice Template
echo '<h1>This is an example of a very basic WP_Query Loop.</h1>';
	$query = new WP_Query([
		'post_type' => 'post'
	]);
	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		// echo "cat id is: ".the_category_ID();
		echo '<br>';
	}
	wp_reset_postdata();
echo '<h1>Now let\'s look at what get_posts does.<br>Note that i have added a posts_per_page parameter. It simply limits the number of the posts returned.</h1>';
	$posts = get_posts([
		'post_type' => 'post',
		'posts_per_page' => 1
	]);
	foreach ($posts as $post) {
		echo "<pre>";
		var_dump($post);
		echo "</pre>";
	}
	
echo '<h1>Let\'s try a more advanced example of a Query:<br>I am looking for all "posts" from the category "front-end", that are tagged "css". I want them to be ordered by "modified date" and presented in ascending order. *your category and tag names may differ</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'category_name' => 'applications',
		'category__in' =>[4],
		'tag' => 'Application',
		'orderby' => 'modified',
		'order' => 'ASC',
	]);
	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		// echo "category id is:";
		// echo the_category_id();
		echo '<br>';
	}
	wp_reset_postdata();