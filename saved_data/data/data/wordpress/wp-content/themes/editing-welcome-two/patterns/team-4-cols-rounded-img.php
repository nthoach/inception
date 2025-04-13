<?php
/**
 * Title: Team 4 Columns Rounded Images
 * Slug: editing-welcome-two/team-4-cols-rounded-img
 * Categories: team
 * Viewport Width: 1400
 * Description: A team section with a heading and a grid (four columns) to introduce your team members Each grid item includes a pill-shaped image on top with a heading and a list below it.
 */

$names = array(__('Ben', 'editing-welcome-two'), __('Ava', 'editing-welcome-two'), __('Nick', 'editing-welcome-two'), __('Lily', 'editing-welcome-two'));

$jobs = array(array(__('Life Coach', 'editing-welcome-two'), __('Meditation Teacher', 'editing-welcome-two')),
              array(__('Life Coach', 'editing-welcome-two'), __('Finance Expert', 'editing-welcome-two')),
              array(__('Life Coach', 'editing-welcome-two'), __('Yoga Teacher', 'editing-welcome-two')),
              array(__('Life Coach', 'editing-welcome-two'), __('Psychotherapist', 'editing-welcome-two')));

$pics = array('guy_curly', 'girl_curly', 'guy_blonde', 'girl_ponytail');

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"},"blockGap":"4rem"}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-3-background-color has-background" style="padding-top:8rem;padding-bottom:8rem">

    <!-- wp:heading {"textAlign":"center","align":"wide"} -->
    <h2 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e('Meet our Team', 'editing-welcome-two'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
    <div class="wp-block-group alignwide">

        <?php for($i = 0; $i < 4 ; $i++): ?>

        <!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1},"spacing":{"padding":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"1.5rem"},"blockGap":"0rem"},"shadow":"var:preset|shadow|close"},"backgroundColor":"base-3-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group has-base-3-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:1.5rem;padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--close)">

            <!-- wp:group {"style":{"border":{"radius":"10rem"},"shadow":"var:preset|shadow|close"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="border-radius:10rem;box-shadow:var(--wp--preset--shadow--close)">

                <!-- wp:image {"id":556,"width":"200px","height":"auto","aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                <figure class="wp-block-image size-full is-resized is-style-rounded">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/'.$pics[$i].'.svg' ) ); ?>" alt="<?php esc_attr_e( 'Computer graphic showing a staff member, placeholder image', 'editing-welcome-two' ); ?>" class="wp-image-556" style="aspect-ratio:2/3;object-fit:cover;width:200px;height:auto"/>
                </figure>
                <!-- /wp:image -->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","padding":{"top":"var:preset|spacing|40","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:2rem">

                <!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"left":"2rem"}}}} -->
                <h3 class="wp-block-heading" style="padding-left:2rem"><?php echo esc_html($names[$i]); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list -->
                <ul class="wp-block-list">

                    <!-- wp:list-item -->
                    <li><?php echo esc_html($jobs[$i][0]); ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php echo esc_html($jobs[$i][1]); ?></li>
                    <!-- /wp:list-item -->

                </ul>
                <!-- /wp:list -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <?php endfor; ?>

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
