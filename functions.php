<?php
add_theme_support('post-thumbnails');

function sampletheme_scripts(){
  wp_enqueue_style( 'main', get_template_directory_uri() . '/main.css');
}
add_action('wp_enqueue_scripts','sampletheme_scripts');

function sampletheme_gfonts(){
  wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i&display=swap');
  wp_enqueue_style('Lato');
  wp_register_style('Oswald', 'https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap');
  wp_enqueue_style('Oswald');
}
add_action('wp_enqueue_scripts', 'sampletheme_gfonts');


function make_custom_post() {
	register_post_type( 'films',
			array(
			'labels' => array(
	'name' => __( 'Films' ),
	'singular_name' => __( 'Films' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
	'title',
	'editor',
	'thumbnail',
	'custom-fields'
			)
	));
}
add_action( 'init', 'make_custom_post' );

function client_cpt() {
  register_post_type('clients',
    array(
      'labels' => array(
        'name' => __( 'Clients' ),
        'singular_name' => __('Client'),
      ),
      'public' => true,
      'show_ui' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-businessman',
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'custom-fields'
      )
    ));
}
add_action( 'init', 'client_cpt' );
