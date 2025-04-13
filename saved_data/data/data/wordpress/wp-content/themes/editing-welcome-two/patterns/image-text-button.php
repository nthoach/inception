<?php
/**
 * Title: Image With Text And Button
 * Slug: editing-welcome-two/image-text-button
 * Categories: text, about
 * Viewport Width: 1400
 * Description: A text section with a big pill-shaped image on the left and a heading, two paragraphs and a button on the right.
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"10rem"}}},"backgroundColor":"base-3-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-light-background-color has-background" style="padding-top:8rem;padding-bottom:10rem">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:image {"id":424,"width":"392px","height":"auto","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded","style":{"shadow":"var:preset|shadow|close"}} -->
        <figure class="wp-block-image size-large is-resized is-style-rounded">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rose916.webp' ) ); ?>" alt="<?php esc_attr_e( 'Photo of a rose, placeholder image', 'editing-welcome-two' ); ?>" class="wp-image-424" style="box-shadow:var(--wp--preset--shadow--close);width:392px;height:auto"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">

            <!-- wp:heading -->
            <h2 class="wp-block-heading"><?php esc_html_e('A few words about me', 'editing-welcome-two'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'editing-welcome-two'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'editing-welcome-two'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"4rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons" style="margin-top:4rem">

                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('About', 'editing-welcome-two'); ?></a></div>
                <!-- /wp:button -->

            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
