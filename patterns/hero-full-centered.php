<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hero, full width text centered
 */
return array(
	'name'        => 'hero-full-centered',
	'title'       => 'Hero, full width text centered',
	'description' => 'A hero with a full width image, heading, short paragraph and button.',
	'categories'  => array( 'appro-featured' ),
	'content'     => '<!-- wp:cover {"url":"{{PLUGIN_URL}}images/yoga.jpg","dimRatio":30,"minHeight":840,"minHeightUnit":"px","metadata":{"categories":["banner"],"patternName":"all-patterns-pro/hero-full-centered","name":"Hero (Cover Background)"},"align":"full","style":{"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"default"}} --><div class="wp-block-cover alignfull" style="min-height:840px"><img class="wp-block-cover__image-background" alt="" src="{{PLUGIN_URL}}images/yoga.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} --><h1 class="wp-block-heading has-text-align-center">Hero</h1><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Bacon ipsum dolor amet chicken biltong porchetta jowl sirloin pig ground round flank meatball kevin swine chuck pancetta picanha.</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Take Action</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div></div><!-- /wp:cover -->',
);