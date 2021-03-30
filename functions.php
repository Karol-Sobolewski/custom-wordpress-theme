<?php

if ( ! defined( 'DIR_PATH' ) ) {
	define( 'DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'DIR_URI' ) ) {
	define( 'DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once DIR_PATH . '/inc/helpers/autoloader.php';


function get_theme_instance() {
    \KAROL_SOBOLEWSKI_THEME\Inc\KAROL_SOBOLEWSKI_THEME::get_instance();
}

get_theme_instance();
