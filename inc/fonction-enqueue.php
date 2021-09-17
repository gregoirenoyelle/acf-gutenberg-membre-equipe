<?php // Ressources

//* enqueue style back
add_action('admin_enqueue_scripts','acf_bloc_gutenberg_styles_back', 999);
function acf_bloc_gutenberg_styles_back() {
	wp_register_style('styles-projet-back', plugin_dir_url(__DIR__ ) . 'css/style-back-office.css', array(), '1.0', 'all' );
	wp_enqueue_style('styles-projet-back');
}
