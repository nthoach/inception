<?php
/**
 * Title: Blog Posts Without Images
 * Slug: editing-welcome-two/from-the-blog
 * Categories: posts
 * Viewport Width: 1400
 * Description: A blog section with a heading and a row containing previews of the three latest posts. The previews include the post title, the post date, an excerpt and the post categories.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"2rem","padding":{"top":"8rem","bottom":"10rem"}}},"backgroundColor":"base-3-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-light-background-color has-background" style="padding-top:8rem;padding-bottom:10rem">

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:2rem;padding-bottom:2rem">

        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Interesting articles to read', 'editing-welcome-two'); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
        <div class="wp-block-query alignwide">

            <!-- wp:post-template {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;box-shadow:var(--wp--preset--shadow--close)">

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">

                        <!-- wp:post-title {"level":3,"isLink":true} /-->

                        <!-- wp:post-date {"isLink":true} /-->

                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">

                        <!-- wp:post-excerpt {"excerptLength":15} /-->
    
                        <!-- wp:post-terms {"term":"category","separator":" "} /-->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:group -->

            <!-- /wp:post-template -->

        </div>
        <!-- /wp:query -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">

        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"4rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons" style="margin-top:4rem">

            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Blog', 'editing-welcome-two'); ?></a></div>
            <!-- /wp:button -->

        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
