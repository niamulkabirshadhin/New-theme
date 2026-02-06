<?php
add_theme_support('title-tag');
add_theme_support("post-thumbnails");

function sn_css_js_enqueue(){
    wp_enqueue_style( "sn-style", get_stylesheet_uri(  ) );
     wp_enqueue_style( "bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", [] , "5.3.8", "all" );
    wp_enqueue_style( "custom", get_template_directory_uri() . "/css/custom.css", [], "1.0.0", "all" );

    wp_enqueue_style( "bootstrap");
    wp_enqueue_style( "custom");

    wp_enqueue_script( "bootstrap-js", get_template_directory_uri(  ) . "/js/bootstrap.min.js", [], "5.3.8", "true");

}
add_action("wp_enqueue_scripts","sn_css_js_enqueue");