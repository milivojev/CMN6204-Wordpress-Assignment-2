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

echo '<h1>Now let\'s look at what get_posts does.<br>Note that i have added a posts_per_page parameter. It simply limits the number of the posts returned.</h1>';
	$posts = get_posts([
		'post_type' => 'post',
		'posts_per_page' => 1
	]);
	foreach ($posts as $post) {
		// echo "<pre>";
		var_dump($post);
		// echo "</pre>";
	}
	
echo '<h1>Let\'s try a more advanced example of a Query:<br>I am looking for all "posts" from the category "front-end", that are tagged "css". I want them to be ordered by "modified date" and presented in ascending order. *your category and tag names may differ</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'category_in' =>'applications',
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

echo '<h1>Task #1:<br> Write a query that outputs titles of only 2 posts that have last been modified</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'orderby' => 'modified',
		'order' => 'DESC',
		'posts_per_page' => 2
		]);
		while($query->have_posts()){
			$query->the_post();
			echo the_title() . "<br>";
		}

echo "<h1>Task #2:<br> Write a query that outputs titles of all pages!</h1>";	
	$query = new WP_Query([
		'post_type' => 'page'
	]);
	while($query->have_posts()){
			$query->the_post();	
			echo the_title()."<br>";
	}

echo "<h1>Task #3:<br>  Write a query that outputs creation dates of all posts. The posts must be sorted by created date, in an descending order</h1>";
	$query = new WP_Query([
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC'
	]);
	while($query->have_posts()){	
		$query->the_post();
		$posts_date = get_the_date();
		echo the_title()." Date Created: ".$posts_date . "<br>";
	}
echo "<h1>Task #4:<br>Write a query that shows all the posts for two tags of your choice at the same time.Output each post title and it's tag list.</h1>";
 	$query = new WP_Query([
 		'post_type' => 'post',
 		'tag' => 'PHP, Cloud'
 	]);
 	while($query->have_posts()){
 			$query->the_post();
	    	$post_title = the_title();
			$post_tags = the_tags(' | Tags: ', ',');
			echo $post_title . $post_tags . "<br>";

 	}
 	// wp_reset_postdata();

echo "<h1> Task #5 <br> Write the same query, but limit post number to 3</h1>";
	$query = new WP_Query([
		'post_type' => 'post',
 		'tag' => 'PHP, Cloud',
		'posts_per_page' => 3	
	]);
	while($query->have_posts()){
			$query->the_post();
			$post_title = the_title();
			$post_tags = the_tags(' | Tags: ', ',');
			echo $post_title . $post_tags ."<br>";

 	}
echo "<h1> Task #5 <br> Write a query that finds the page by name Practice, and output it's author ID." ;
	$query = new WP_Query([
		'post_type' => 'page',
		'pagename' => 'practice',
	]);
				
	while($query->have_posts()){
			$query->the_post();
			$author_id = get_the_author_meta('ID');
			$post_title = the_title();
			echo the_title. " Author id: ".$author_id."<br>";
	}	

echo "<h1> Task #6 <br> Copy the same query, but use the author ID in combination with the get_user_by() method. It will get you the user object, so that you can output Author's full name and email.</h1>" ;
	$query = new WP_Query([
		'post_type' => 'page',
		'pagename' => 'welcome',
	]);
	while($query->have_posts()){
		$query->the_post();
		$author_id = get_the_author_meta('ID');
		$user_details = get_user_by('ID',$author_id);
		// echo "<pre>";
		// var_dump($user_details);
		// echo "</pre>";
		echo "users name is: ".$user_details->display_name . " and email is: ". $user_email;
	}
	







