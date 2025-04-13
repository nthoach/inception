<?php
/**
 * Title: Services 3 Columns
 * Slug: editing-welcome-two/services-3-columns
 * Categories: services
 * Viewport Width: 1400
 * Description: A three-column services/products section with a heading and three boxes, each one containing a heading, a paragraph, an image and a cta-button.
 */

$headings = array(__('Coaching', 'editing-welcome-two'), __('Music Therapy', 'editing-welcome-two'), __('Mindfulness', 'editing-welcome-two'));

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"8rem"}}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-background-color has-background" style="padding-top:4rem;padding-bottom:8rem">

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem;">

        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('How can I help you?', 'editing-welcome-two'); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"stretch","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide">

        <?php foreach ($headings as $heading) : ?>

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"2rem","bottom":"2rem"}},"layout":{"selfStretch":"fixed","flexSize":"25.8rem"},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="padding-top:2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:2rem;padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--close)">

            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading"><?php echo esc_html($heading); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod', 'editing-welcome-two'); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
            <div class="wp-block-group" style="padding-top:1rem;padding-bottom:1rem">

               <!-- wp:image {"id":420,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"shadow":"var:preset|shadow|natural"}} -->
               <figure class="wp-block-image size-full is-style-rounded">
                   <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flower169.webp' ) ); ?>" alt="<?php esc_attr_e( 'Small pink flower, placeholder image', 'editing-welcome-two' ); ?>" class="wp-image-420" style="box-shadow:var(--wp--preset--shadow--natural)"/>
               </figure>
               <!-- /wp:image -->

            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"4rem"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
            <div class="wp-block-buttons" style="margin-top:4rem">

                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html($heading); ?></a></div>
                <!-- /wp:button -->

            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

         <?php endforeach; ?>

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
