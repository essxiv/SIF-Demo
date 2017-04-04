<?php

function wpbootstrap_scripts_with_jquery() {
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}

function WP_Navbar() {
  register_nav_menu('my-custom-menu',__( 'My Navbar Menu' ));
}

add_action( 'init', 'WP_Navbar' );

?>
