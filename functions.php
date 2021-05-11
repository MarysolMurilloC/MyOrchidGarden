<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function load_assets(){

    //load BS
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
    
   // wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
   
   //load bundler with popper
   wp_enqueue_style('bundler', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js');


    //load stlye.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'load_assets');
                        
    //register nav menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    //support featured image
    add_theme_support('post-thumbnails'); 

?> 