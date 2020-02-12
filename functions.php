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
        'thumbnail',
        'custom-fields'
      )
    ));
}
add_action( 'init', 'client_cpt' );

//ACF Functions to display fields based on User Role:

//add global setting:
function admin_only_render_field_settings( $field ){
  acf_render_field_setting( $field, array(
    'label' => __('Admin Only?'),
    'instructions' => '',
    'name' => admin_only,
    'type' => 'true_false',
    'ui' => 1,
  ), true);
}

add_action('acf/render_field_settings', 'admin_only_render_field_settings');

//hook into ACF filter:
add_filter('acf/prepare_field', 'admin_only_prepare_field');

function admin_only_prepare_field( $field ){
  //if no 'Admin Only' setting is set
    if( empty($field['admin only']) ) return $field;

  //if not an Admin hide field:
    if( !current_user_can('administrator') ) return false;

  //return
    return $field;
}
