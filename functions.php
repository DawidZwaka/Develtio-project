<?php 
require_once "inc/custom-nav-walker.php";
require_once "inc/static-navs.php";
require_once "inc/footer-module.php";

function customtheme_setup() {

    register_nav_menus([
        "main_menu" => __('Main Menu'),
        "footer_about" => __('Footer About'),
        "footer_insurance" => __('Footer Insurance'),
        "footer_help" => __('Footer Help')
    ]);

    $logo_params = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
        );
    
    add_theme_support( 'custom-logo', $logo_params );
}

function add_theme_scripts() {
   wp_enqueue_style( 'style', get_stylesheet_uri() );
   wp_enqueue_style( 'theme-styling', get_template_directory_uri() . '/index.css' );
   wp_enqueue_script( 'jquery-slim', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
   wp_enqueue_script( 'popper-with-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js');
   
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
add_action( 'after_setup_theme', 'customtheme_setup' );
?>