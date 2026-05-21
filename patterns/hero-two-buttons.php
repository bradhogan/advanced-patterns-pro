<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hero, two buttons
 */
return array(
	'name'        => 'hero-two-buttons',
	'title'       => 'Hero with two buttons',
	'description' => 'A hero image with a heading, text and two buttons',
	'categories'  => array( 'appro-featured' ),
	'content'     => '<!-- wp:cover {"url":"{{PLUGIN_URL}}images/skater.jpg","dimRatio":60,"minHeight":840,"minHeightUnit":"px","metadata":{"categories":["appro-featured"],"patternName":"all-patterns-pro/hero-full-centered","name":"Hero (Cover Background)"},"align":"full","style":{"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"default"}} --><div class="wp-block-cover alignfull" style="min-height:840px"><img class="wp-block-cover__image-background" alt="" src="{{PLUGIN_URL}}images/skater.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} --><h1 class="wp-block-heading has-text-align-center">A better way to build a website.</h1><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip steak sirloin ribeye landjaeger tail olor amet flank sirloin venison tail, alcatra turducken shoulder.</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Join the waitlist</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn more</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div></div><!-- /wp:cover -->',
);