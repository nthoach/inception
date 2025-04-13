<?php
/**
 * Title: Comments
 * Slug: editing-welcome-two/comments-layout-2
 * Categories: comments
 * Viewport Width: 1400
 * Description: Comments section with comments list, pagination, and comment form.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-bottom:4rem">

<!-- wp:comments -->
<div class="wp-block-comments">

    <!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem","padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem">

        <!-- wp:separator {"backgroundColor":"decorative-2"} -->
        <hr class="wp-block-separator has-text-color has-decorative-2-color has-alpha-channel-opacity has-decorative-2-background-color has-background"/>
        <!-- /wp:separator -->

        <!-- wp:separator {"backgroundColor":"decorative-2"} -->
        <hr class="wp-block-separator has-text-color has-decorative-2-color has-alpha-channel-opacity has-decorative-2-background-color has-background"/>
        <!-- /wp:separator -->

    </div>
    <!-- /wp:group -->

    <!-- wp:comments-title /-->

    <!-- wp:comment-template {"className":"layout-2"} -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"margin":{"top":"2rem","bottom":"2rem"}},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="margin-top:2rem;margin-bottom:2rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem;box-shadow:var(--wp--preset--shadow--close)">

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">

                <!-- wp:comment-author-name {"isLink":true,"style":{"typography":{"fontSize":"1rem"}}} /-->

                <!-- wp:comment-date {"format":"M j, Y","isLink":false,"style":{"typography":{"fontSize":"1rem"}}} /-->

            </div>
            <!-- /wp:group -->

            <!-- wp:comment-content {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem"}}}} /-->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">

                <!-- wp:comment-reply-link {"style":{"typography":{"fontSize":"1.2rem"}}} /-->

                <!-- wp:comment-edit-link {"style":{"typography":{"fontSize":"1.2rem"}}} /-->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    <!-- /wp:comment-template -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">

        <!-- wp:comments-pagination {"paginationArrow":"chevron","className":"layout-2","backgroundColor":"base","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->

            <!-- wp:comments-pagination-previous /-->

            <!-- wp:comments-pagination-numbers /-->

            <!-- wp:comments-pagination-next /-->

        <!-- /wp:comments-pagination -->

    </div>
    <!-- /wp:group -->

    <!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"2rem"}}}} /-->

</div>
<!-- /wp:comments -->

</div>
<!-- /wp:group -->
