<?php
/*
Plugin Name: First Plugin
*/


function my_function($text)
{
	
$text=str_replace('Welcome','NeWWW',$text);
return $text;
}

add_filter('the_content','my_function');
//add_filter('the_title','my_function');
?>