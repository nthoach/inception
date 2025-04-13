<?php
/**
 * Title: Welcome Block with H1 and image
 * Slug: editing-welcome-two/welcome-h1-image
 * Categories: banner
 * Viewport Width: 1400
 * Description: A banner section containing the main heading (H1) and a rounded image.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"8rem","top":"6rem"}}},"backgroundColor":"base-3-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-light-background-color has-background" style="padding-top:6rem;padding-bottom:8rem">

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"2.5rem","letterSpacing":"1px"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;letter-spacing:1px"><?php esc_html_e('Coaching & Therapy', 'editing-welcome-two'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:image {"id":418,"sizeSlug":"large","linkDestination":"none","align":"wide","className":"is-style-rounded","style":{"shadow":"var:preset|shadow|deep"}} -->
        <figure class="wp-block-image alignwide size-large is-style-rounded">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/plant169.webp' ) ); ?>" alt="<?php esc_attr_e( 'Plant with colorful leaves, placeholder image', 'editing-welcome-two' ); ?>" class="wp-image-418" style="box-shadow:var(--wp--preset--shadow--deep)"/>
        </figure>
        <!-- /wp:image -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
