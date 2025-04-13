<?php
/**
 * Title: Posts With Featured Image
 * Slug: editing-welcome-two/posts-feat-img-layout-2
 * Categories: posts
 * Viewport Width: 1400
 * Description: A blog section with a heading and a grid (3 columns) of post previews including the post title, the post date, the author name, the featured image, an excerpt and the post categories.
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

    <!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide">

        <!-- wp:post-template {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;box-shadow:var(--wp--preset--shadow--close)">

                <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">

                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.7rem"}}} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group">

                        <!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('by', 'editing-welcome-two'); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:post-author-name {"isLink":true} /-->

                        </div>
                        <!-- /wp:group -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">

                    <!-- wp:post-featured-image {"aspectRatio":"16/9","height":"","style":{"border":{"radius":"10rem"},"shadow":"var:preset|shadow|close"}} /-->

                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">

                    <!-- wp:post-excerpt {"excerptLength":15} /-->

                    <!-- wp:post-terms {"term":"category","separator":""} /-->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        <!-- /wp:post-template -->

        <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide" style="margin-top:4rem;margin-bottom:4rem">

            <!-- wp:query-pagination {"paginationArrow":"chevron","align":"wide","className":"layout-2","layout":{"type":"flex","justifyContent":"space-between"}} -->

                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers {"style":{"typography":{"fontSize":"1.4rem"}}} /-->

                <!-- wp:query-pagination-next /-->

            <!-- /wp:query-pagination -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->
