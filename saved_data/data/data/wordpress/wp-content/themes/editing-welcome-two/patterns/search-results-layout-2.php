<?php
/**
 * Title: Search Results
 * Slug: editing-welcome-two/search-results-layout-2
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"blockGap":"4rem","padding":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"base-3-light","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-base-3-light-background-color has-background" style="padding-top:6rem;padding-bottom:6rem">

<!-- wp:query-title {"type":"search","textAlign":"center","align":"wide"} /-->

<!-- wp:query {"queryId":11,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[],"format":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">

    <!-- wp:post-template {"style":{"spacing":{"blockGap":"2.5rem"}}} -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;box-shadow:var(--wp--preset--shadow--close)">

            <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:post-title {"isLink":true} /-->

                <!-- wp:post-date {"isLink":true} /-->

            </div>
            <!-- /wp:group -->

            <!-- wp:post-excerpt {"excerptLength":20} /-->

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

    <!-- wp:query-no-results -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('No results found. Please enter a different search term.', 'editing-welcome-two'); ?></p>
        <!-- /wp:paragraph -->

    <!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->

</main>
<!-- /wp:group -->
