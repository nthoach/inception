<?php
/**
 * Travel Holiday Spots: Block Patterns
 *
 * @since Travel Holiday Spots 1.0
 */

function travel_holiday_spots_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'travel-holiday-spots' => array( 'label' => __( 'Travel Holiday Spots', 'travel-holiday-spots' ) )
	);
	$block_pattern_categories = apply_filters( 'travel_holiday_spots_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'travel_holiday_spots_register_block_patterns', 9 );