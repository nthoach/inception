<?php
require get_template_directory() . '/inc/block-patterns.php';

function nimbora_theme_enqueue_styles()
{
    wp_enqueue_style(
        'nimbora_theme-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}

add_action('wp_enqueue_scripts', 'nimbora_theme_enqueue_styles');

function nimbora_theme_js_script()
{
wp_enqueue_script(
    'nimbora-effects-js',
    get_template_directory_uri() . '/assets/js/nimbora-effects.js',
    array(),
    wp_get_theme()->get('Version'),
    true // load on footer
);
}
add_action('wp_enqueue_scripts', 'nimbora_theme_js_script'); 

function nimbora_theme_js_custom_script()
{
wp_enqueue_script(
    'nimbora-custom-js',
    get_template_directory_uri() . '/assets/js/nimbora-custom.js',
    array(),
    wp_get_theme()->get('Version'),
    true // load on footer
);
}
add_action('wp_enqueue_scripts', 'nimbora_theme_js_custom_script'); 


// Add Customizer
require get_template_directory() . '/inc/customizer.php';


// Upsell in the customizer
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Nimbora_Upsell_Section extends WP_Customize_Section {
		public $type = 'nimbora-upsell';
		public $button_text = '';
		public $url = '';
		public $background = '';
		public $text_color = '';
		protected function render() {
			$background = ! empty( $this->background ) ? esc_attr( $this->background ) : 'linear-gradient(90deg,rgb(0,0,0) 0%,rgb(0,0,0) 35%,rgb(0,0,0) 70%,rgb(0,0,0) 100%)
            ';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="nimbora_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

// Add Get Started
require get_template_directory() . '/inc/get-started/get-started.php';


function nimbora_notice() {
    $user_id = get_current_user_id();
    if ( !get_user_meta( $user_id, 'nimbora_notice_dismissed' ) ) {
 
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex-inline;padding: 10px;">
        <h2 style="color: #FFC300"><?php esc_html_e('☆☆☆☆☆', 'nimbora'); ?><br></h2>
            <p><?php esc_html_e('This is just a sample of what the Nimbora Template can do, the Premium Version is waiting for you!', 'nimbora'); ?></p>
            <a style="margin-top: 18px;" class="button button-primary" target="_blank"
               href="<?php echo esc_url('https://realtimethemes.com/theme-nimbora'); ?>"><?php esc_html_e('See Premium Version', 'nimbora') ?></a>
               <a href="?nimbora-dismissed" style="margin-top: 18px;" class="button button-secondary"><?php esc_html_e('Dismiss', 'nimbora'); ?></a>
        </div>
        <?php
        }
}
add_action( 'admin_notices', 'nimbora_notice' ); 

function nimbora_notice_dismissed() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['nimbora-dismissed'] ) ) 
        add_user_meta( $user_id, 'nimbora_notice_dismissed', 'true', true );
}
add_action( 'admin_init', 'nimbora_notice_dismissed' );

define('NIMBORA_BUY_NOW',__('https://realtimethemes.com/theme-nimbora','nimbora'));
define('NIMBORA_PRO_DEMO',__('https://preview.realtimethemes.com/nimbora','nimbora'));
define('NIMBORA_REVIEW',__('https://realtimethemes.com/theme-nimbora','nimbora'));
define('NIMBORA_SUPPORT',__('https://realtimethemes.com/','nimbora'));


?>