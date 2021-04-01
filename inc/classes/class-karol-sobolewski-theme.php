<?php

namespace KAROL_SOBOLEWSKI_THEME\Inc;

use KAROL_SOBOLEWSKI_THEME\Inc\Traits\Singleton;
use WP_WIDGET;

class KAROL_SOBOLEWSKI_THEME {
    use Singleton;
    protected function __construct(){
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        add_action('after_setup_theme', [ $this, 'setup_theme']);
        add_action( 'widgets_init', [$this, 'widgets_init' ]);
    }

    public function register_styles() {
        wp_register_style('bootstrap', DIR_URI . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style( 'site_main_css', DIR_URI . '/css/build/main.min.css' );
    }
    public function register_scripts() {
        wp_enqueue_script( 'site_main_js', DIR_URI . '/js/build/app.min.js' , null , null , true );
    }
    public function setup_theme() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 60, 
            'width' => 200,
            'flex-height' => true,
            'flex-width' => true,
       ]);
    }
    public function widgets_init() {

		register_sidebar(
			[
                'name'          => 'Header Widget Area',
                'id'            => 'header-widget',
                'before_widget' => '<div class="header-widget">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="header-title">',
                'after_title'   => '</h2>',
			]
		);

        register_sidebar(
			[
                'name'          => 'Section Widget Area',
                'id'            => 'section-widget',
                'before_widget' => '<div class="section-widget">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="section-title">',
                'after_title'   => '</h2>',
			]
		);
    }

}

