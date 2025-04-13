<?php
/**
 * Title: home
 * Slug: nimbora/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"padding":{"top":"100px","left":"10%","right":"10%"}},"color":{"gradient":"linear-gradient(135deg,rgba(14,149,227,0.58) 0%,rgba(155,81,224,0.74) 100%)"},"background":{"backgroundImage":{"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/hero-img01.webp","id":1841,"source":"file","title":"hero-img01"},"backgroundSize":"cover"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(135deg,rgba(14,149,227,0.58) 0%,rgba(155,81,224,0.74) 100%);padding-top:100px;padding-right:10%;padding-left:10%"><!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"bottom":"60px","left":"10%","right":"10%"}}}} -->
<div class="wp-block-columns alignfull" style="padding-right:10%;padding-bottom:60px;padding-left:10%"><!-- wp:column {"verticalAlignment":"bottom","width":"65%","style":{"spacing":{"padding":{"top":"100px"},"blockGap":"30px"}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:100px;flex-basis:65%"><!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group" style="line-height:1"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"85px","textTransform":"uppercase"}}} -->
<h1 class="wp-block-heading" style="font-size:85px;text-transform:uppercase"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-white-color"><strong><strong><?php esc_html_e( 'Grow Smarter', 'nimbora' ); ?></strong></strong></mark></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"40%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Blog Content"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"10%","left":"10%","top":"100px","bottom":"100px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull" style="padding-top:100px;padding-right:10%;padding-bottom:100px;padding-left:10%"><!-- wp:query {"queryId":12,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"border":{"width":"1px","style":"dotted","color":"#abb8c3","radius":"30px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"1rem","bottom":"1rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:#abb8c3;border-style:dotted;border-width:1px;border-radius:30px;padding-top:1rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"400px","style":{"border":{"radius":"30px"}}} /-->

<!-- wp:post-date {"textAlign":"center"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"padding":{"right":"10%","left":"10%","top":"10px","bottom":"10px"}}}} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-bottom:20px"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Adicione texto ou blocos que serão exibidos quando uma consulta não retornar resultados."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"center"} /-->