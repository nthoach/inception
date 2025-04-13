<?php
/**
 * @package Travel Holiday Spots
 */

function travel_holiday_spots_customizer_add_defaults( $default_options) {
	$defaults = array(
		'travel_holiday_spots_excerpt_length'    => 30,
	);
	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'travel_holiday_spots_customizer_defaults', 'travel_holiday_spots_customizer_add_defaults' );

function travel_holiday_spots_gtm( $option ) {
	$defaults = apply_filters( 'travel_holiday_spots_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'travel_holiday_spots_excerpt_length' ) ) :
	function travel_holiday_spots_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		$length	= travel_holiday_spots_gtm( 'travel_holiday_spots_excerpt_length' );

		return absint( $length );
	} 
endif;
add_filter( 'excerpt_length', 'travel_holiday_spots_excerpt_length', 999 );