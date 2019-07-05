<?php

// load script 
function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function load_file() {
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
}
 
function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'load_file' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

// the_excerpt
function get_excerpt_length(){
    return 50;
}

function return_excerpt_text(){
    return ;
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');

function widget_setup(){
    register_sidebar(array(
        'name' => "Sidebar Pertama",
        'id' => "sidebar1"
    ));
}

add_action('widgets_init','widget_setup');

function init_setup(){
    add_theme_support('post-thumbnails');
    add_image_size('small_thumb', 240, 160, true);
    add_image_size('big_thumb', 240, 160, true);
}

add_action('after_setup_theme','init_setup');

?>