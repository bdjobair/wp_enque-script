//LATEST JQUERY CALL
function latest_jquery_call() {
	wp_enqueue_script('jquery');
}

add_action('init', 'latest_jquery_call');
