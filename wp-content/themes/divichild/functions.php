<?php

add_action('wp_enqueue_scripts','my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
    wp_enqueue_style('rootcss', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri().'/css/custom.css');
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri().'/js/script.js');
    
}




?>