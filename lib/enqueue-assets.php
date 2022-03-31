<?php 

function customtheme_assets(){
    wp_enqueue_style(
        'customtheme-stylesheet', 
        get_template_directory_uri().'/style.css', 
        array(), 
        '1.0.0', 
        'all');

    wp_enqueue_style(
        'customtheme-bootstrap-stylesheet', 
        get_template_directory_uri().'/assets/css/bootstrap.css', 
        array(), 
        '1.0.0', 
        'all');

    wp_enqueue_style(
        'customtheme-wpcore-stylesheet', 
        get_template_directory_uri().'/assets/css/wp_core.css', 
        array(), 
        '1.0.0', 
        'all');

    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'customtheme-scripts', 
        get_template_directory_uri().'/assets/js/scripts.js', 
        array(), 
        '1.0.0', 
        true); 
}

add_action('wp_enqueue_scripts', 'customtheme_assets');



function customtheme_admin_assets(){
    wp_enqueue_style(
        'customtheme-admin-stylesheet', 
        get_template_directory_uri().'/assets/css/admin.css', 
        array(), 
        '1.0.0', 
        'all');
}

add_action('admin_enqueue_scripts', 'customtheme_admin_assets');


?>