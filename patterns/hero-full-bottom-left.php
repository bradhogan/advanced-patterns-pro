<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hero, full width text bottom left
 */
return array(
	'name'        => 'hero-full-bottom-left',
	'title'       => 'Hero, full width text bottom left',
	'description' => 'A hero with a full width image, content bottom left.',
	'categories'  => array( 'appro-featured' ),
	'content'     => '<!-- wp:cover {"url":"{{PLUGIN_URL}}images/surfing.jpg","id":350,"dimRatio":30,"minHeight":840,"minHeightUnit":"px","contentPosition":"bottom center","metadata":{"categories":["banner"],"patternName":"all-patterns-pro/hero-full-bottom-left","name":"Hero (Cover Background)"},"align":"full","style":{"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"constrained"}} --><div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="min-height:840px"><img class="wp-block-cover__image-background wp-image-350" alt="" src="{{PLUGIN_URL}}images/surfing.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} --><div class="wp-block-group alignwide"><!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Hero Bottom Left</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} --><p style="font-size:20px">Bacon ipsum dolor amet chicken biltong porchetta jowl sirloin pig ground round flank meatball kevin swine chuck pancetta picanha.</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Take Action</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div></div><!-- /wp:cover -->',
);