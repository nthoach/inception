<?php
/**
 * Title: Posts Template
 * Slug: editing-welcome-two/single-post-layout-2
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"base-3-light","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-base-3-light-background-color has-background" style="padding-top:6rem;padding-bottom:6rem">

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"blockGap":"1rem","margin":{"bottom":"2rem"}}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-base-3-background-color has-background" style="margin-bottom:2rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">

        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.2rem"}}} -->
        <h3 class="wp-block-heading" style="font-size:1.2rem"><?php esc_html_e('Categories:', 'editing-welcome-two'); ?></h3>
        <!-- /wp:heading -->

        <!-- wp:post-terms {"term":"category","separator":" "} /-->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:2rem">

        <!-- wp:post-title {"level":1} /-->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0.7rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->

        <div class="wp-block-group">

            <!-- wp:post-date /-->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('by', 'editing-welcome-two'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:post-author-name {"isLink":true} /-->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:post-content {"lock":{"move":false,"remove":true},"align":"full","layout":{"type":"constrained"}} /-->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"blockGap":"1rem","margin":{"bottom":"2rem"}}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-base-3-background-color has-background" style="margin-bottom:2rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">

        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.2rem"}}} -->
        <h3 class="wp-block-heading" style="font-size:1.2rem"><?php esc_html_e('Tags:', 'editing-welcome-two'); ?></h3>
        <!-- /wp:heading -->

        <!-- wp:post-terms {"term":"post_tag","separator":" "} /-->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem","margin":{"top":"2.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="margin-top:2.5rem">

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">

            <!-- wp:post-navigation-link {"type":"previous","showTitle":true,"linkLabel":true,"arrow":"chevron","className":"layout-2"} /-->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">

            <!-- wp:post-navigation-link {"showTitle":true,"linkLabel":true,"arrow":"chevron","className":"layout-2"} /-->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:pattern {"slug":"editing-welcome-two/comments-layout-2"} /-->

</main>
<!-- /wp:group -->
