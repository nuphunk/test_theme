<?php
/**
 * West Norwood Feast - Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package West Norwood Feast - Astra Childs
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_WEST_NORWOOD_FEAST_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'west-norwood-feast-astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_WEST_NORWOOD_FEAST_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

add_filter('the_content', 'remove_divi_shortcodes');
function remove_divi_shortcodes( $content ) {
    $content = preg_replace('/\[\/?et_pb.*?\]/', '', $content);
    return $content;
}
