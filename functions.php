<?php

function followrene_menus() {

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items",

    );

    register_nav_menus($locations);
}

add_action('init', 'followrene_menus');


// Adds Dynamic title tag support

function followrene_theme_support(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'followrene_theme_support');

// Add style To Wordpress

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri('style.css') );
 
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );





add_action('wp-enqueue-scripts', 'rene_register_styles');

/*
function rene_register_scripts() {

    wp_enqueue_script('followrene-scripts');

}

add_action('wp-enqueue-scripts', 'rene_register_scripts');


*/

function widget_area() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget'=> '',
            'after_widget'=> '',
            'name'=> 'sidebar-area',
            'id'=>'sidebar-1',
            'description'=> 'Sidebar Widget Area',
        )
    );
}

add_action('widgets_init','widget_area');

?>