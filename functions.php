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

function wpjetex_enqueue_style() {
	wp_enqueue_style( 'wpjetex-css', get_stylesheet_directory_uri() . '/custom.css', false ); 
}

function wpjetex_enqueue_script() {
    wp_enqueue_script( 'jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false );
	wp_enqueue_script( 'wpjetex-js', get_stylesheet_directory_uri() . '/custom.js', false );
}

add_action( 'wp_enqueue_scripts', 'wpjetex_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'wpjetex_enqueue_script' );