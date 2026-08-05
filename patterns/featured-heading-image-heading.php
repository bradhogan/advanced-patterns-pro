<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Featured, heading image heading
 */
return array(
	'name'        => 'featured-heading-image-heading',
	'title'       => 'Multiple headings with big image',
	'description' => 'A big heading, sub-title, image then another big heading',
	'categories'  => array( 'appro-featured' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} --><div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading --><h2 class="wp-block-heading">Make great things.</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"bottom","width":"30%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%"><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">Bacon ipsum dolor amet porchetta brisket strip steak, beef ribs drumstick jowl ball tip shankle.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:cover {"url":"{{PLUGIN_URL}}images/snowboarder.jpg","id":1584,"dimRatio":0,"isUserOverlayColor":true,"isDark":false,"sizeSlug":"full","align":"wide","layout":{"type":"constrained"}} --><div class="wp-block-cover alignwide is-light"><img class="wp-block-cover__image-background wp-image-1584 size-full" alt="" src="{{PLUGIN_URL}}images/snowboarder.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} --><p class="has-text-align-center has-large-font-size"></p><!-- /wp:paragraph --></div></div><!-- /wp:cover --><!-- wp:group {"align":"wide","className":"m-width-100","layout":{"type":"constrained","wideSize":"80%","justifyContent":"left"}} --><div class="wp-block-group alignwide m-width-100"><!-- wp:heading {"level":2,"align":"wide"} --><h2 class="wp-block-heading alignwide">A great way to display a bold mission statement and tell people why you are awesome.</h2><!-- /wp:heading --></div><!-- /wp:group --></div><!-- /wp:group -->',
);