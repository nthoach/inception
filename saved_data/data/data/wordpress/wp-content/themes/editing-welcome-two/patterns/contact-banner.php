<?php
/**
 * Title: Contact Banner
 * Slug: editing-welcome-two/contact-banner
 * Categories: contact
 * Viewport Width: 1400
 * Description: A banner containing a heading (level 2) and two headings (level 3) with two paragraphs to provide contact information.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"8rem","top":"8rem"},"blockGap":"4.5rem"}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-background-color has-background" style="padding-top:8rem;padding-bottom:8rem">

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","right":"1rem","bottom":"4rem","left":"1rem"},"blockGap":"3rem"},"shadow":"var:preset|shadow|close"},"backgroundColor":"base-3-light","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-base-3-light-background-color has-background" style="padding-top:3rem;padding-right:1rem;padding-bottom:4rem;padding-left:1rem;box-shadow:var(--wp--preset--shadow--close)">

        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Contact me', 'editing-welcome-two'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"4rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide">

            <!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem","padding":{"top":"2rem","bottom":"2rem","left":"3rem","right":"3rem"}},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;box-shadow:var(--wp--preset--shadow--close)">

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.4rem"}}} -->
                <h3 class="wp-block-heading" style="font-size:1.4rem"><?php esc_html_e('Phone:', 'editing-welcome-two'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.4rem"}}} -->
                <p style="font-size:1.4rem"><?php esc_html_e('0000 11223344', 'editing-welcome-two'); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem","padding":{"top":"2rem","bottom":"2rem","left":"3rem","right":"3rem"}},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;box-shadow:var(--wp--preset--shadow--close)">

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.4rem"}}} -->
                <h3 class="wp-block-heading" style="font-size:1.4rem"><?php esc_html_e('E-Mail:', 'editing-welcome-two'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.4rem"}}} -->
                <p style="font-size:1.4rem"><?php esc_html_e('info@nameoftherapist.com', 'editing-welcome-two'); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
