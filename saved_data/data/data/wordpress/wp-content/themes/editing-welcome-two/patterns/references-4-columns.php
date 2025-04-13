<?php
/**
 * Title: Testimonials 4 Columns
 * Slug: editing-welcome-two/references-4-columns
 * Categories: testimonials
 * Viewport Width: 1400
 * Description: A section with a heading and 4 testimonials. Each testimonial consists of an image, a statement and the name (and age) of the customer.
 */

$clients = array(__('Mary, 35', 'editing-welcome-two'), __('Jack, 52', 'editing-welcome-two'), __('Grace, 44', 'editing-welcome-two'), __('John, 26', 'editing-welcome-two'));

?>   

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"8rem"}}},"backgroundColor":"base-3-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-light-background-color has-background" style="padding-top:4rem;padding-bottom:8rem">

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem">

        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('What my clients say about me', 'editing-welcome-two'); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"16rem"}} -->
    <div class="wp-block-group alignwide">

        <?php foreach ($clients as $client) : ?>

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"2rem","bottom":"2rem"}},"layout":{"selfStretch":"fit","flexSize":null},"shadow":"var:preset|shadow|close"},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-3-background-color has-background" style="padding-top:2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:2rem;padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--close)">

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group">

                <!-- wp:image {"id":420,"width":"193px","height":"auto","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"shadow":"var:preset|shadow|natural"}} -->
                <figure class="wp-block-image size-full is-resized is-style-rounded">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flower169.webp' ) ); ?>" alt="<?php esc_attr_e( 'Small pink flower, placeholder image', 'editing-welcome-two' ); ?>" class="wp-image-420" style="box-shadow:var(--wp--preset--shadow--natural);aspect-ratio:4/3;object-fit:cover;width:193px;height:auto"/>
                </figure>
                <!-- /wp:image -->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:quote {"textAlign":"center","className":"is-style-default"} -->
                <blockquote class="wp-block-quote has-text-align-center is-style-default">

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua."', 'editing-welcome-two'); ?></p>
                    <!-- /wp:paragraph -->

                    <cite><?php echo esc_html($client); ?></cite>

                </blockquote>
                <!-- /wp:quote -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <?php endforeach; ?>


    </div>
    <!-- /wp:group -->
    
</div>
<!-- /wp:group -->
