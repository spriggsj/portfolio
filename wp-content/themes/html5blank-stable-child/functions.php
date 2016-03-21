<?php





add_action('wp_enqueue_scripts', 'my_method');
function my_method() {
    //sets it
	wp_register_script('custom-script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
	
	wp_register_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js', true );
	// fires it
	wp_enqueue_script('custom-script'); //enqueue it
	
	
	// jQuery if Needed
	// wp_register_script('bootstrap-jquery', get_stylesheet_directory_uri() . '/jquery1/js/jquery-1.8.3.min.js', array(), false );
	// fires it
	// wp_enqueue_script('bootstrap-jquery'); //enqueue it
}    


add_action('wp_enqueue_scripts', 'my_style_method');
function my_style_method() {
   
	//sets it
	wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all');
	// fires it
	wp_enqueue_style('bootstrap'); //enqueue it

	//sets it
	wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
	// fires it
	wp_enqueue_style('style'); //enqueue it
}   


// Register Custom Navigation Walker
 require_once('wp_bootstrap_navwalker.php');





?>


