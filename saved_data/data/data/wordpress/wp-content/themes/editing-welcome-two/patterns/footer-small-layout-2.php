<?php
/**
 * Title: Small Footer
 * Slug: editing-welcome-two/footer-small-layout-2
 * Categories: footer
 * Viewport Width: 1400
 * Description: A small footer section containing a navigation menu (e.g. for legal links and a contact link) and a paragraph with a copyright notice.
 */
?>

<!-- wp:group {"align":"full","className":"stack-above","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"shadow":"var:preset|shadow|close"},"backgroundColor":"base-3-light","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull stack-above has-base-3-light-background-color has-background" style="padding-top:4rem;padding-bottom:4rem;box-shadow:var(--wp--preset--shadow--close)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:navigation {"overlayMenu":"never","icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"contrast","align":"wide","style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","justifyContent":"right"},"ariaLabel":"<?php esc_attr_e( 'Navigation', 'editing-welcome-two' ); ?>"} -->

            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'editing-welcome-two' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'editing-welcome-two' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Legal Notice', 'editing-welcome-two' ); ?>","url":"#"} /-->

    <!-- /wp:navigation -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:paragraph -->
        <p><?php esc_html_e('© 2025 Name of Website Owner - all rights reserved.', 'editing-welcome-two'); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
