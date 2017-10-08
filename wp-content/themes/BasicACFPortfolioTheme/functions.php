<?php
function custom_title(){
	return wp_title(). ' | '. get_bloginfo('name').' ~ '.get_bloginfo('description');
}

