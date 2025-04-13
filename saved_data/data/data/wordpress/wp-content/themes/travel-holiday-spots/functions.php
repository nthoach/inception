<?php
/**
 * Travel Holiday Spots functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Travel Holiday Spots
 */

if ( ! defined( 'TRAVEL_HOLIDAY_SPOTS_VERSION' ) ) {
	define( 'TRAVEL_HOLIDAY_SPOTS_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'travel_holiday_spots_setup' ) ) :
	function travel_holiday_spots_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'block-nav-menus' );
		add_theme_support( 'experimental-link-color' );
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'travel-holiday-spots' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'travel_holiday_spots_setup' );

/**
 * Enqueue scripts and styles.
 */
function travel_holiday_spots_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array( 'dashicons' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_style( 'travel-holiday-spots-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
}
add_action( 'wp_enqueue_scripts', 'travel_holiday_spots_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function travel_holiday_spots_admin_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array();

	wp_enqueue_style( 'travel-holiday-spots-admin-style', get_stylesheet_directory_uri() . '/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

}
add_action( 'admin_enqueue_scripts', 'travel_holiday_spots_admin_scripts' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/core/init.php';