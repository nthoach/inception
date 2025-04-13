<?php
/**
 * Title: Cover with Quote
 * Slug: editing-welcome-two/cover-with-quote
 * Categories: featured, banner
 * Viewport Width: 1400
 * Description: A banner section with a hero image in the background and a pullquote in the foreground.
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/plant169.webp' ) ); ?>","id":418,"hasParallax":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="min-height:600px">

    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>

    <div class="wp-block-cover__image-background wp-image-418 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/plant169.webp' ) ); ?>)"></div>

    <div class="wp-block-cover__inner-container">

        <!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide">

            <!-- wp:pullquote {"style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"4rem","bottom":"3rem","right":"2rem","left":"2rem"}}},"backgroundColor":"base","textColor":"contrast","borderColor":"decorative-2"} -->
            <figure class="wp-block-pullquote has-border-color has-decorative-2-border-color has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="border-width:2px;padding-top:4rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">

                <blockquote>
                            
                   <p><?php esc_html_e('"Understanding is the heartwood', 'editing-welcome-two'); ?><br><?php esc_html_e('of well-spoken words.“', 'editing-welcome-two'); ?></p>

                   <cite><?php esc_html_e('The Buddha', 'editing-welcome-two'); ?></cite>

                </blockquote>

            </figure>
            <!-- /wp:pullquote -->

        </div>
        <!-- /wp:group -->

    </div>

</div>
<!-- /wp:cover -->
