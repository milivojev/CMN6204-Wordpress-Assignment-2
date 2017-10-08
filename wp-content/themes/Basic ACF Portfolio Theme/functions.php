<?php

function custom_title(){
	$name = get_bloginfo('name');
	$description =  get_bloginfo('description');
	return get_bloginfo('name') + " ~ " + get_bloginfo('description');
	
}

