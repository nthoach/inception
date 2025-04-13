<?php
/**
 * Title: front-page
 * Slug: archline/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"tagName":"section","metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"padding":{"top":"10vh","bottom":"10vh","right":"14%","left":"14%"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<section class="wp-block-group alignfull" style="padding-top:10vh;padding-right:14%;padding-bottom:10vh;padding-left:14%"><!-- wp:group {"metadata":{"name":"Hero Background Wrapper"},"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/hero01.webp","id":320,"source":"file","title":"hero01"},"backgroundSize":"cover","backgroundPosition":"50% 90%"},"dimensions":{"minHeight":"80vh"},"spacing":{"padding":{"right":"0%","left":"2%","bottom":"2%"}},"border":{"radius":"16px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignfull" style="border-radius:16px;min-height:80vh;padding-right:0%;padding-bottom:2%;padding-left:2%"><!-- wp:group {"metadata":{"name":"Hero Box Content"},"className":"hero-box-content","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"dimensions":{"minHeight":"385px"}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group hero-box-content has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="border-radius:10px;min-height:385px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"32px"}}} -->
<h1 class="wp-block-heading" style="font-size:32px"><?php echo esc_html_e( 'We design with intention', 'archline' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php echo esc_html_e( 'Our process balances innovation and practicality', 'archline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"8px"},"typography":{"fontSize":"12px"},"spacing":{"padding":{"left":"20px","right":"20px"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:12px"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color wp-element-button" href="#projects" style="border-radius:8px;padding-right:20px;padding-left:20px"><?php echo esc_html_e( 'Explore Projects', 'archline' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"left":"20px","right":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"12px"}},"borderColor":"contrast"} -->
<div class="wp-block-button has-custom-font-size" style="font-size:12px"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-border-color has-contrast-border-color wp-element-button" href="#services" style="border-width:1px;border-radius:8px;padding-right:20px;padding-left:20px"><?php echo esc_html_e( 'Learn More', 'archline' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Process Section"},"align":"full","style":{"spacing":{"padding":{"right":"15%","left":"15%","top":"0px","bottom":"25px"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:0px;padding-right:15%;padding-bottom:25px;padding-left:15%"><!-- wp:columns {"metadata":{"name":"Section Header"},"align":"full","style":{"spacing":{"blockGap":{"left":"10%"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"40%","metadata":{"name":"Process Content Wrapper"},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-bottom:0px;flex-basis:40%"><!-- wp:group {"className":"process-content-wrapper","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"10vh"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group process-content-wrapper" style="padding-top:10vh"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px"><strong><?php echo esc_html_e( 'Our Design Process', 'archline' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php echo esc_html_e( 'At Archline, we blend creativity with precision to transform ideas into built reality. Our collaborative approach brings together architects, engineers, and artisans to craft spaces that resonate with purpose—whether a private residence, commercial hub, or cultural landmark. Every project begins with listening and evolves through meticulous attention to detail.', 'archline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-buttons" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"border":{"radius":"16px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}}},"borderColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-border-color has-contrast-border-color wp-element-button" href="#about" style="border-width:1px;border-radius:16px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php echo esc_html_e( 'About Us', 'archline' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%","metadata":{"name":"Process Cards Wrapper"},"className":"process-cards-wrapper","style":{"spacing":{"padding":{"top":"0vh"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top process-cards-wrapper" style="padding-top:0vh;flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"10vh"}},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="padding-top:10vh"><!-- wp:group {"metadata":{"name":"Process Card"},"className":"process-card","style":{"spacing":{"padding":{"right":"32px","left":"32px","top":"56px","bottom":"56px"},"margin":{"top":"2%","bottom":"2%"}},"border":{"radius":"16px"},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"accent-4","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group process-card has-accent-4-background-color has-background" style="border-radius:16px;margin-top:2%;margin-bottom:2%;padding-top:56px;padding-right:32px;padding-bottom:56px;padding-left:32px"><!-- wp:group {"style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-radius:50%;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><!-- wp:heading {"style":{"typography":{"fontSize":"16px"}}} -->
<h2 class="wp-block-heading" style="font-size:16px">1</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"400"}}} -->
<h2 class="wp-block-heading" style="font-size:32px;font-style:normal;font-weight:400"><?php echo esc_html_e( 'Conceptual Framework', 'archline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php echo esc_html_e( 'Where your vision takes shape through sketches, mood boards, and exploratory models.', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Process Card"},"className":"process-card","style":{"spacing":{"padding":{"right":"32px","left":"32px","top":"56px","bottom":"56px"},"margin":{"top":"2%","bottom":"2%"}},"border":{"radius":"16px"},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"accent-4","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group process-card has-accent-4-background-color has-background" style="border-radius:16px;margin-top:2%;margin-bottom:2%;padding-top:56px;padding-right:32px;padding-bottom:56px;padding-left:32px"><!-- wp:group {"style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-radius:50%;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><!-- wp:heading {"style":{"typography":{"fontSize":"16px"}}} -->
<h2 class="wp-block-heading" style="font-size:16px">2</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"400"}}} -->
<h2 class="wp-block-heading" style="font-size:32px;font-style:normal;font-weight:400"><?php echo esc_html_e( 'Design Development', 'archline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php echo esc_html_e( 'Where concepts evolve into tangible plans with material selections and spatial refinements.', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Process Card"},"className":"process-card","style":{"spacing":{"padding":{"right":"32px","left":"32px","top":"56px","bottom":"56px"},"margin":{"top":"2%","bottom":"2%"}},"border":{"radius":"16px"},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"accent-4","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group process-card has-accent-4-background-color has-background" style="border-radius:16px;margin-top:2%;margin-bottom:2%;padding-top:56px;padding-right:32px;padding-bottom:56px;padding-left:32px"><!-- wp:group {"style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-radius:50%;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><!-- wp:heading {"style":{"typography":{"fontSize":"16px"}}} -->
<h2 class="wp-block-heading" style="font-size:16px">3</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"400"}}} -->
<h2 class="wp-block-heading" style="font-size:32px;font-style:normal;font-weight:400"><strong><?php echo esc_html_e( 'Technical Documentation', 'archline' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php echo esc_html_e( 'Where every detail is translated into precise blueprints for flawless execution.', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"About Section"},"align":"full","style":{"spacing":{"padding":{"right":"14%","left":"14%"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" id="about" style="padding-right:14%;padding-left:14%"><!-- wp:columns {"metadata":{"name":"Section Header"},"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"50px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-bottom:50px"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px"><?php echo esc_html_e( 'About Us', 'archline' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"metadata":{"name":"About Content Columns"},"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-left" style="font-size:16px;font-style:normal;font-weight:500"><?php echo esc_html_e( 'At Archline, we believe architecture should tell a story. Fast, lightweight, and built for modern aesthetics.', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"About Content Grid"},"layout":{"type":"grid","minimumColumnWidth":"300px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"backgroundColor":"accent-4","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-accent-4-background-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px"><?php echo esc_html_e( '15+', 'archline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php echo esc_html_e( 'Design Evolution', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"backgroundColor":"accent-4","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-accent-4-background-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px"><?php echo esc_html_e( '180+', 'archline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php echo esc_html_e( 'Tailored Solutions', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"rowSpan":1,"columnSpan":3},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"backgroundColor":"accent-4","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-accent-4-background-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px"><?php echo esc_html_e( '160+', 'archline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px">&nbsp;<?php echo esc_html_e( 'Built Works', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Projects Section"},"align":"full","style":{"spacing":{"padding":{"right":"15%","left":"15%","top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" id="projects" style="padding-top:50px;padding-right:15%;padding-bottom:50px;padding-left:15%"><!-- wp:columns {"metadata":{"name":"Section Header"},"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"style":{"spacing":{"padding":{"top":"50px","bottom":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:50px;padding-bottom:0px"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px"><?php echo esc_html_e( 'Our Projects', 'archline' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"500px"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"metadata":{"name":"Project Card"},"className":"project-card","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"radius":"16px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group project-card" style="border-radius:16px;padding-right:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/project06.webp" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Project Card CTA"},"className":"project-card-cta","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group project-card-cta has-base-background-color has-background" style="border-radius:8px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"3vw"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:3vw"><a href="#"><?php echo esc_html_e( 'Zenith Pavilion', 'archline' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"3vw"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:3vw"><a href="#"><?php echo esc_html_e( '🠊', 'archline' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Project Card"},"className":"project-card","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"radius":"16px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group project-card" style="border-radius:16px;padding-right:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/project07.webp" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Project Card CTA"},"className":"project-card-cta","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group project-card-cta has-base-background-color has-background" style="border-radius:8px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"3vw"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:3vw"><a href="#"><?php echo esc_html_e( 'The Terraced', 'archline' ); ?>&nbsp;</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"3vw"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:3vw"><a href="#"><?php echo esc_html_e( '🠊', 'archline' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Project Card"},"className":"project-card","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"radius":"16px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group project-card" style="border-radius:16px;padding-right:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/project08.webp" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Project Card CTA"},"className":"project-card-cta","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group project-card-cta has-base-background-color has-background" style="border-radius:8px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"3vw"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:3vw"><a href="#"><?php echo esc_html_e( 'Canopy House', 'archline' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"3vw"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:3vw"><a href="#"><?php echo esc_html_e( '🠊', 'archline' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Project Card"},"className":"project-card","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"radius":"16px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group project-card" style="border-radius:16px;padding-right:0px;padding-left:0px"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/project04.webp" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Project Card CTA"},"className":"project-card-cta","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group project-card-cta has-base-background-color has-background" style="border-radius:8px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"3vw"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:3vw"><a href="#"><?php echo esc_html_e( 'Urban Loft', 'archline' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"3vw"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:3vw"><a href="#"><?php echo esc_html_e( '🠊', 'archline' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Blog Section"},"align":"full","style":{"spacing":{"padding":{"right":"15%","left":"15%","top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:50px;padding-right:15%;padding-bottom:50px;padding-left:15%"><!-- wp:columns {"metadata":{"name":"Section Header"},"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"style":{"spacing":{"padding":{"top":"50px","bottom":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:50px;padding-bottom:0px"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px"><?php echo esc_html_e( 'Our Blog', 'archline' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"customOverlayColor":"#66615b","isUserOverlayColor":true,"contentPosition":"bottom center","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#66615b"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"270px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"32px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0px","right":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"}},"border":{"radius":"16px","width":"1px"},"typography":{"lineHeight":"1.8"}},"textColor":"contrast","borderColor":"contrast"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Services Section"},"align":"full","style":{"spacing":{"padding":{"right":"15%","left":"15%"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" id="services" style="padding-right:15%;padding-left:15%"><!-- wp:columns {"metadata":{"name":"Section Header"},"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"style":{"spacing":{"padding":{"top":"50px","bottom":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:50px;padding-bottom:0px"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px"><?php echo esc_html_e( 'Our Services', 'archline' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"tagName":"section","align":"full","className":"swiper mySwiper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull swiper mySwiper"><!-- wp:columns {"align":"full","className":"swiper-wrapper"} -->
<div class="wp-block-columns alignfull swiper-wrapper"><!-- wp:column {"className":"swiper-slide"} -->
<div class="wp-block-column swiper-slide"><!-- wp:group {"className":"slide-thumb-box","style":{"border":{"width":"1px","color":"#000000","radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"backgroundColor":"white","textColor":"black","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group slide-thumb-box has-border-color has-black-color has-white-background-color has-text-color has-background has-link-color" style="border-color:#000000;border-width:1px;border-radius:8px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Residential Design', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"swiper-slide"} -->
<div class="wp-block-column swiper-slide"><!-- wp:group {"className":"slide-thumb-box","style":{"border":{"width":"1px","color":"#000000","radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"backgroundColor":"white","textColor":"black","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group slide-thumb-box has-border-color has-black-color has-white-background-color has-text-color has-background has-link-color" style="border-color:#000000;border-width:1px;border-radius:8px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Commercial Design', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"swiper-slide"} -->
<div class="wp-block-column swiper-slide"><!-- wp:group {"className":"slide-thumb-box","style":{"border":{"width":"1px","color":"#000000","radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"backgroundColor":"white","textColor":"black","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group slide-thumb-box has-border-color has-black-color has-white-background-color has-text-color has-background has-link-color" style="border-color:#000000;border-width:1px;border-radius:8px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Exterior Design', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"swiper mySwiper2","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull swiper mySwiper2"><!-- wp:group {"align":"full","className":"swiper-wrapper","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch","justifyContent":"left"}} -->
<div class="wp-block-group alignfull swiper-wrapper"><!-- wp:group {"metadata":{"name":"Services Swiper Content"},"align":"full","className":"swiper-slide","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/services-img05.webp","id":336,"source":"file","title":"services-img05"},"backgroundSize":"cover"},"dimensions":{"minHeight":"80vh"},"spacing":{"padding":{"right":"2%","left":"2%","bottom":"2%","top":"2%"}},"border":{"radius":"16px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group alignfull swiper-slide" style="border-radius:16px;min-height:80vh;padding-top:2%;padding-right:2%;padding-bottom:2%;padding-left:2%"><!-- wp:group {"metadata":{"name":"Service Box Content"},"className":"service-box-content","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group service-box-content has-contrast-color has-white-background-color has-text-color has-background has-link-color" style="border-radius:10px;min-height:0px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"16px"}},"textColor":"black"} -->
<p class="has-black-color has-text-color has-link-color" style="font-size:16px"><?php echo esc_html_e( 'Our residential design services transform houses into personalized sanctuaries, blending lifestyle needs with architectural excellence. We listen carefully to how you use space, then craft homes that feel intuitively right - where every room flows naturally and every detail serves a purpose.', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Services Swiper Content"},"align":"full","className":"swiper-slide","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/services-img02.webp","id":311,"source":"file","title":"services-img02"},"backgroundSize":"cover"},"dimensions":{"minHeight":"80vh"},"spacing":{"padding":{"right":"2%","left":"2%","bottom":"2%","top":"2%"}},"border":{"radius":"16px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group alignfull swiper-slide" style="border-radius:16px;min-height:80vh;padding-top:2%;padding-right:2%;padding-bottom:2%;padding-left:2%"><!-- wp:group {"metadata":{"name":"Service Box Content"},"className":"service-box-content","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group service-box-content has-contrast-color has-white-background-color has-text-color has-background has-link-color" style="border-radius:10px;min-height:0px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-black-color has-text-color has-link-color" style="font-size:16px"><?php echo esc_html_e( 'We design workplaces, retail environments, and hospitality venues that optimize functionality while creating memorable experiences. Our commercial projects always begin with understanding your brand identity, operational needs, and customer journey to deliver spaces that work as hard as you do.', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Services Swiper Content"},"align":"full","className":"swiper-slide","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/services-img04.webp","id":313,"source":"file","title":"services-img04"},"backgroundSize":"cover"},"dimensions":{"minHeight":"80vh"},"spacing":{"padding":{"right":"2%","left":"2%","bottom":"2%","top":"2%"}},"border":{"radius":"16px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group alignfull swiper-slide" style="border-radius:16px;min-height:80vh;padding-top:2%;padding-right:2%;padding-bottom:2%;padding-left:2%"><!-- wp:group {"metadata":{"name":"Service Box Content"},"className":"service-box-content","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group service-box-content has-contrast-color has-white-background-color has-text-color has-background has-link-color" style="border-radius:10px;min-height:0px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-black-color has-text-color has-link-color" style="font-size:16px">&nbsp;<?php echo esc_html_e( 'Our exterior design services create striking first impressions that blend aesthetics with functionality. We carefully consider materials, textures, and architectural styles to ensure your project stands out while withstanding environmental factors. From modern minimalist facades to traditional elevations with contemporary twists, we design exteriors that enhance curb appeal and reflect your vision.', 'archline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Contact Section"},"align":"full","style":{"spacing":{"padding":{"right":"15%","left":"15%"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:15%;padding-left:15%"><!-- wp:columns {"metadata":{"name":"Section Header"},"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"style":{"spacing":{"padding":{"top":"50px","bottom":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:50px;padding-bottom:0px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:32px"><?php echo esc_html_e( 'Contact Us', 'archline' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Contact Wrapper"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"width":"1px","color":"#111111","radius":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:#111111;border-width:1px;border-radius:16px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:html -->
<style>
    .contact-container {
        width: 100%;
        max-width: 500px;
    }

    .contact-info {
        margin-bottom: 20px;
    }

    .contact-info-text {
        margin: 5px 0;
        color: #666;
    }

    .contact-row {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
    }

    .contact-row > div {
        flex: 1;
    }

    .contact-input, 
    .contact-textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .contact-input {
        height: 40px;
    }

    .contact-textarea {
        height: 100px;
        resize: vertical;
    }

    .contact-button {
        width: 100%;
        padding: 12px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
    }

    .contact-button:hover {
        opacity: 0.9;
    }
</style>

<div class="contact-container">
    <div class="contact-info">
        <p class="contact-info-text"><?php echo esc_html_e( '1234 Street Name, State Name 123456', 'archline' ); ?></p>
        <p class="contact-info-text"><?php echo esc_html_e( '000-000-0000', 'archline' ); ?></p>
        <p class="contact-info-text"><?php echo esc_html_e( 'contact@email.com', 'archline' ); ?></p>
    </div>
    <form>
        <div class="contact-row">
            <div>
                <input type="text" placeholder="Name" class="contact-input">
            </div>
            <div>
                <input type="email" placeholder="Email" class="contact-input">
            </div>
        </div>
        <div>
            <textarea placeholder="Message" class="contact-textarea"></textarea>
        </div>
        <button type="submit" class="contact-button"><?php echo esc_html_e( 'Send Message', 'archline' ); ?></button>
    </form>
</div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"33.34%","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}}} -->
<div class="wp-block-column" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;flex-basis:33.34%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->