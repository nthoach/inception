<?php
// Display a dismissible admin notice
function editing_welcome_two_admin_notice()
{
    global $pagenow;
    $screen = get_current_screen();
    $hide_notice = get_option( 'editing_welcome_two_hide_admin_notice' );

    if(!$hide_notice)
    {
        if(is_network_admin() || !current_user_can( 'manage_options' ))
        {
            return;
        }
        if($screen->base != 'appearance_page_editing-welcome-two-about-page')
        { ?>
            
            <div class="notice notice-success">
                <h1 class="admin-notice-heading"><?php esc_html_e('Thank you for installing Editing Welcome Two!', 'editing-welcome-two'); ?></h1>
                <div class="admin-notice-link-row">
                    <p class="explore-link-wrapper"><a class="ew2-button explore-link" href="<?php echo esc_url( admin_url( 'themes.php?page=editing-welcome-two-about-page' ) ); ?>"><?php esc_html_e('Explore Theme', 'editing-welcome-two'); ?></a></p>
                    <p class="dismiss-link-wrapper"><a class="ew2-button dismiss-link" href="?editing_welcome_two_hide_admin_notice=1"><?php esc_html_e('Dismiss this notice', 'editing-welcome-two'); ?></a></p>
                </div>
            </div>

        <?php
        } 
    }
}

add_action( 'admin_notices', 'editing_welcome_two_admin_notice' );


// Display the admin notice upon theme activation
function editing_welcome_two_setup() {
    update_option('editing_welcome_two_hide_admin_notice', false );
}

add_action('after_switch_theme', 'editing_welcome_two_setup');


// Hide the admin notice if it has been dismissed
function editing_welcome_two_dismiss_admin_notice()
{
    if ( isset( $_GET['editing_welcome_two_hide_admin_notice'] ) && $_GET['editing_welcome_two_hide_admin_notice'] == '1' ) {
        update_option( 'editing_welcome_two_hide_admin_notice', true );
    }
}

add_action( 'admin_init', 'editing_welcome_two_dismiss_admin_notice' ); ?>
