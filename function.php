//LATEST JQUERY CALL
function latest_jquery_call() {
	wp_enqueue_script('jquery');
}

add_action('init', 'latest_jquery_call');

//Masonary Script CALL
function mason_script() {
    wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );

// Register wp_nav_menu() .
		
	register_nav_menus( array(
	'mainmenu' => __( 'Main Menu' ),
	'footermenu' => __( 'Footer Menu' ),
) );

//header.php page call nav menu
<?php wp_nav_menu(array('theme_location' => 'mainmenu', 'menu_id' => 'nav',''));?>
