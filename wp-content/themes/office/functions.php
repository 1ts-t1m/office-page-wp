<?php

add_action( 'wp_enqueue_scripts', 'office_style' );
add_action( 'wp_enqueue_scripts', 'office_scripts' );


function office_style() {

  wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css');
  wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/assets/css/fonts.css');
  wp_enqueue_style( 'jquery.fancybox.min-style', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
  wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css');
  wp_enqueue_style( 'jquery.formstyler-style', get_template_directory_uri() . '/assets/css/jquery.formstyler.css');
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  wp_enqueue_style( 'media-style', get_template_directory_uri() . '/assets/css/media.css');

	
}


function office_scripts() {

  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

  wp_enqueue_script( 'fancybox-script', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js',
  array(), null, true );

  wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js',
  array(), null, true );

  wp_enqueue_script( 'formstyler-script', get_template_directory_uri() . '/assets/js/jquery.formstyler.min.js',
  array(), null, true );

  wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js',
  array(), null, true );
  
}