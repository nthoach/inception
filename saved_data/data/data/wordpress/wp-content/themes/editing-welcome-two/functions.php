<?php

// Disable remote patterns
add_filter( 'should_load_remote_block_patterns', '__return_false' );


// Remove core block patterns
function editing_welcome_two_remove_core_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

add_action( 'after_setup_theme', 'editing_welcome_two_remove_core_patterns' );


// Add a custom style sheet to the admin area
function editing_welcome_two_admin_styles()
{
    wp_enqueue_style('ew2-admin-style', esc_url(get_template_directory_uri()) . '/inc/ew2-admin-styles.css');
}

add_action('admin_enqueue_scripts', 'editing_welcome_two_admin_styles');


// A submenu 'Explore the Theme' in the Appearance menu in the WP-backend (shown when the theme is active)
require get_template_directory() . '/inc/submenu-page.php';


// Admin notice to be shown when the theme gets activated
require get_template_directory() . '/inc/admin-notice.php';


// Some new pattern categories
function editing_welcome_two_register_pattern_categories() {

    register_block_pattern_category( 'editing-welcome-two/full-page', array( 
		'label'       => __( 'Full Page Layouts', 'editing-welcome-two' ),
		'description' => __( 'Layouts for complete pages', 'editing-welcome-two' )
	) );
}

add_action( 'init', 'editing_welcome_two_register_pattern_categories' );
