<?php

function wpt_theme_styles() {
    
    wp_enqueue_style( 'foundation_css', get_templete_directory_uri() . '/css/foundations.css' );
    
    wp_enqueue_style( 'normalize_css', get_templete_directory_uri() . '/css/normalize.css' );
    
    wp_enqueue_style( 'normalize_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
    
    wp_enqueue_styles( 'style_css', get_templete_directory_uri() . '/styles.css' );
    
}
add_action('wp_enqueue_scripts', 'wpt_theme_styles');

    function wpt_theme_js() {
    
    wp_enqueue_script( 'modernizr_js', get_templete_directory_uri() . '/js/modernizr.js', '', '', false );
    wp_enqueue_script( 'foundation_js', get_templete_directory_uri() . '/js/foundation.js', array('jquery'), '', true );
    wp_enqueue_script( 'main_js', get_templete_directory_uri() . '/js/app.js', array('jquery', 'foundation.js'), '', true );
    
}
add_action('wp_enqueue_scripts', 'wpt_theme_js');

?>