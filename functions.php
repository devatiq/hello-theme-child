<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'SUPREOX_STARTUP_VERSION', '1.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function supreox_limited_child_scripts_styles() {

	wp_enqueue_style(
		'supreox-quick-start-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		SUPREOX_STARTUP_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'supreox_limited_child_scripts_styles', 20 );
