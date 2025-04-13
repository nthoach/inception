<?php
/**
 * Title: Small Header Without Image
 * Slug: editing-welcome-two/header-no-img-layout-2
 * Categories: header
 * Viewport Width: 1400
 * Description: A small header setion containing the site-logo, site-title and site-tagline, a navigation and a search form.
 */
?>

<!-- wp:group {"align":"full","className":"stack-above","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull stack-above">

    <!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"backgroundColor":"base-3","textColor":"contrast","layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-group alignfull has-contrast-color has-base-3-background-color has-text-color has-background has-link-color" style="padding-top:1rem;padding-bottom:1rem">

        <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group">

                <!-- wp:site-logo {"width":70} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0rem","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

                <!-- wp:site-title {"level":0,"isLink":true,"style":{"typography":{"fontSize":"1.4rem","fontStyle":"normal","fontWeight":"700"}}} /-->

                <!-- wp:site-tagline /-->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained","justifyContent":"right"}} -->
    <div class="wp-block-group alignfull has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:2rem;padding-bottom:2rem;box-shadow:var(--wp--preset--shadow--close)">

        <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"4rem","padding":{"right":"2rem","left":"2rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
        <div class="wp-block-group alignfull" style="padding-right:2rem;padding-left:2rem">

            <!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"contrast","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"1.3rem"},"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","justifyContent":"center"},"ariaLabel":"<?php esc_attr_e( 'Navigation', 'editing-welcome-two' ); ?>"} /-->

            <!-- wp:search {"label":"<?php esc_html_e( 'Search', 'editing-welcome-two' ); ?>","showLabel":false,"buttonText":"<?php esc_html_e( 'Search', 'editing-welcome-two' ); ?>","buttonUseIcon":false} /-->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
