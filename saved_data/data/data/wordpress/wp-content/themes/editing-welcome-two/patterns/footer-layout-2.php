<?php
/**
 * Title: Footer
 * Slug: editing-welcome-two/footer-layout-2
 * Categories: footer
 * Viewport Width: 1400
 * Description: A footer section with three columns. The first column contains the site logo, the site title, the site-tagline and contact information, the two other columns contain different navigation menus. Below the three columns is a paragraph with a copyright notice.
 */
?>

<!-- wp:group {"align":"full","className":"stack-above","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"},"blockGap":"4rem"},"shadow":"var:preset|shadow|close"},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull stack-above has-base-3-background-color has-background" style="padding-top:4rem;padding-bottom:4rem;box-shadow:var(--wp--preset--shadow--close)">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"stretch","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"layout":{"columnSpan":2}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
        <div class="wp-block-group" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">

                    <!-- wp:site-logo {"width":100} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">

                        <!-- wp:site-title {"level":2,"style":{"typography":{"fontSize":"1.6rem"}}} /-->

                        <!-- wp:site-tagline /-->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.2rem"}}} -->
                        <h3 class="wp-block-heading" style="font-size:1.2rem"><?php esc_html_e('Phone:', 'editing-welcome-two'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('0000 11223344', 'editing-welcome-two'); ?></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.2rem"}}} -->
                        <h3 class="wp-block-heading" style="font-size:1.2rem"><?php esc_html_e('E-Mail:', 'editing-welcome-two'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('info@nameoftherapist.com', 'editing-welcome-two'); ?></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"layout":{"columnSpan":2,"rowSpan":1}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

            <!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
            <h2 class="wp-block-heading" style="font-size:1.6rem"><?php esc_html_e('Navigation', 'editing-welcome-two'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:navigation {"overlayMenu":"never","icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"contrast","align":"wide","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->

                <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'editing-welcome-two' ); ?>","url":"#"} /-->
                <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'editing-welcome-two' ); ?>","url":"#"} /-->
			    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Coaching', 'editing-welcome-two' ); ?>","url":"#"} /-->
			    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Music Therapy', 'editing-welcome-two' ); ?>","url":"#"} /-->
                <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Mindfulness', 'editing-welcome-two' ); ?>","url":"#"} /-->
                <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'editing-welcome-two' ); ?>","url":"#"} /-->
                <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'editing-welcome-two' ); ?>","url":"#"} /-->

            <!-- /wp:navigation -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"layout":{"columnSpan":2}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
        <div class="wp-block-group" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
                <h2 class="wp-block-heading" style="font-size:1.6rem"><?php esc_html_e('Follow Us', 'editing-welcome-two'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:navigation {"overlayMenu":"never","icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"contrast","align":"wide","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->

                    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Pinterest', 'editing-welcome-two' ); ?>","url":"#"} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'YouTube', 'editing-welcome-two' ); ?>","url":"#"} /-->

                <!-- /wp:navigation -->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
                <h2 class="wp-block-heading" style="font-size:1.6rem"><?php esc_html_e('Legal', 'editing-welcome-two'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:navigation {"overlayMenu":"never","icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"contrast","align":"wide","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->

                    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'editing-welcome-two' ); ?>","url":"#"} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'editing-welcome-two' ); ?>","url":"#"} /-->

                <!-- /wp:navigation -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"2rem","left":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
    <div class="wp-block-group alignwide" style="padding-right:2rem;padding-left:2rem">

        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right"><?php esc_html_e('© 2025 Name of Website Owner - all rights reserved.', 'editing-welcome-two'); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
