<?php 

function elegant_enqueue_css() { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); }

add_action( 'wp_enqueue_scripts', 'elegant_enqueue_css' );

include('editor/footer-editor.php');

include('editor/login-editor.php');

function theme_admin_enqueue($hook) {
	wp_register_script('theme_admin_script', get_stylesheet_directory_uri() . '/theme-admin.js' );
    wp_enqueue_script( 'theme_admin_script' );
}
add_action( 'admin_enqueue_scripts', 'theme_admin_enqueue' );