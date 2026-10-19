<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Heading, text and big image
 */
return array(
	'name'        => 'text-heading-with-big-image',
	'title'       => 'Heading and text with big image',
	'description' => 'Two columns with heading and text in one, big image in the other',
	'categories'  => array( 'appro-text' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-text"],"patternName":"all-patterns-pro/text-heading-big-image","name":"Heading and text with big image"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --><div class="wp-block-group alignwide"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0"}}}} --><div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"right":"10%","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} --><div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-right:10%;padding-bottom:var(--wp--preset--spacing--30);flex-basis:40%"><!-- wp:heading {"textAlign":"left","level":1} --><h1 class="wp-block-heading has-text-align-left">Good design made simple.</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip steak sirloin ribeye landjaeger tail. Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Shank strip steak sirloin ribeye landjaeger tail olor amet flank sirloin venison tail, alcatra turducken shoulder.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":""} --><div class="wp-block-column"><!-- wp:cover {"url":"{{PLUGIN_URL}}images/profile-large.jpg","id":994,"dimRatio":0,"minHeight":720,"minHeightUnit":"px","isDark":false} --><div class="wp-block-cover is-light" style="min-height:720px"><img class="wp-block-cover__image-background wp-image-994" alt="" src="{{PLUGIN_URL}}images/profile-large.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} --><p class="has-text-align-center has-large-font-size"></p><!-- /wp:paragraph --></div></div><!-- /wp:cover --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group --></div><!-- /wp:group -->',
);