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
