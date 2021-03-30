<?php

    function load_stylesheets() {
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/css/build/main.min.css' );
        wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/js/build/app.min.js' , null , null , true );
    }

    add_action('wp_enqueue_scripts', 'load_stylesheets',);