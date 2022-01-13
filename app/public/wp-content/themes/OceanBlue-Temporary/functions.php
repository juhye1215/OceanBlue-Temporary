<?php

function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','wpb_theme_setup');

require get_template_directory(). '/inc/customizer.php';



function wp_theme_support(){
    add_theme_support('custom-logo');
}
add_action('after_setup_theme','wp_theme_support');




?>