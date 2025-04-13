<?php 

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 */
function archline_register_block_patterns() {
    $default_categories = array(
        'archline' => array(
            'label' => esc_html__('Archline', 'archline'),
            'description' => esc_html__('Patterns designed specifically for Archline theme', 'archline'),
        ),
        'archline-pages' => array(
            'label' => esc_html__('Pages', 'archline'),
            'description' => esc_html__('Full page layouts', 'archline'),
        ),
        'archline-sections' => array(
            'label' => esc_html__('Sections', 'archline'),
            'description' => esc_html__('Content section patterns', 'archline'),
        ),
    );

    $block_pattern_categories = apply_filters('archline_block_pattern_categories', $default_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }

    $patterns_directory = get_template_directory() . '/patterns/';

    if (!file_exists($patterns_directory)) {
        return;
    }

    $pattern_files = array_diff(scandir($patterns_directory), array('..', '.'));

    foreach ($pattern_files as $file) {
        $file_path = $patterns_directory . $file;

        if (!is_file($file_path) || pathinfo($file_path, PATHINFO_EXTENSION) !== 'php') {
            continue;
        }

        $pattern_data = get_file_data($file_path, array(
            'title'       => 'Title',
            'slug'        => 'Slug',
            'description' => 'Description',
            'categories'  => 'Categories',
            'keywords'    => 'Keywords',
            'viewport'    => 'ViewportWidth',
        ));

        if (empty($pattern_data['title'])) {
            continue;
        }

        ob_start();
        include $file_path;
        $pattern_content = ob_get_clean();

        if (empty($pattern_content)) {
            continue;
        }

        $categories = array('archline');
        if (!empty($pattern_data['categories'])) {
            $additional_cats = array_map('trim', explode(',', $pattern_data['categories']));
            $categories = array_merge($categories, $additional_cats);
        }

        register_block_pattern(
            'archline/' . (!empty($pattern_data['slug']) ? sanitize_title($pattern_data['slug']) : sanitize_title($pattern_data['title'])),
            array(
                'title'       => $pattern_data['title'],
                'description' => !empty($pattern_data['description']) ? $pattern_data['description'] : '',
                'content'     => $pattern_content,
                'categories'  => $categories,
                'keywords'    => !empty($pattern_data['keywords']) ? explode(',', $pattern_data['keywords']) : array(),
                'viewport'    => !empty($pattern_data['viewport']) ? (int) $pattern_data['viewport'] : null,
            )
        );
    }
}
add_action('init', 'archline_register_block_patterns', 9);


if ( ! function_exists( 'archline_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Archline 1.0
	 *
	 * @return void
	 */
	function archline_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'archline' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}
				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'archline_block_styles' );


function archline_enqueue_block_styles() {
	wp_enqueue_style(
		'archline-block-styles',
		get_template_directory_uri() . '/assets/css/block-styles.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'enqueue_block_assets', 'archline_enqueue_block_styles' );


function archline_enqueue_theme_assets() {
 
    wp_enqueue_style(
        'archline-main-css',
        get_template_directory_uri() . '/assets/css/archline.css',
        array(),
        '1.0.0'
    );
   
    wp_enqueue_script(
        'archline-scrolltotop-js',
        get_template_directory_uri() . '/assets/js/archline-scrolltotop.js',
        array(),
        wp_get_theme()->get('Version'),
        true 
    );
   

   }
   add_action('wp_enqueue_scripts', 'archline_enqueue_theme_assets');


function archline_enqueue_swiper_assets() {
 
    wp_enqueue_style(
        'archline-swiper-css',
        get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );
    wp_enqueue_style(
        'archline-custom-swiper-css',
        get_template_directory_uri() . '/assets/css/custom-swiper.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'archline-swiper-js',
        get_template_directory_uri() . '/assets/js/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true 
    );
   
    wp_enqueue_script(
        'archline-custom-swiper',
        get_template_directory_uri() . '/assets/js/archline-custom-swiper.js',
        array('archline-swiper-js'), 
        '1.0.0',
        true 
    );
   }
   add_action('wp_enqueue_scripts', 'archline_enqueue_swiper_assets');
