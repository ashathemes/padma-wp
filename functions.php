<?php
/**
 * Padma Wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Padma Wp
 */

if ( ! defined( 'PADMA_WP_VERSION' ) ) {
	$padma_wp_theme = wp_get_theme();
	define( 'PADMA_WP_VERSION', $padma_wp_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function padma_wp_scripts() {
    wp_enqueue_style( 'padma-wp-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','padma-default-block','padma-style'), '', 'all');
    wp_enqueue_style( 'padma-wp-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), PADMA_WP_VERSION, 'all');
}
add_action( 'wp_enqueue_scripts', 'padma_wp_scripts' );

/**
 * Custom excerpt length.
 */
function padma_wp_excerpt_length( $length ) {
    if ( is_admin() ) return $length;
    return 36;
}
add_filter( 'excerpt_length', 'padma_wp_excerpt_length', 999 );