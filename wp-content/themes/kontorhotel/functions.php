<?php
/**
 * custom function of kontorhotel template
*/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'id' => 'left-sidebar',
        'description' => 'Appears as the sidebar on the right site',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}