<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header, simple
 */
return array(
	'name'        => 'header-default',
	'title'       => 'Header',
	'description' => 'Header with logo, navigation and button.',
	'categories'  => array( 'header' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["header"],"patternName":"all-patterns-pro/header-default","name":"Header"},"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --><div class="wp-block-group alignwide" style="padding-top:15px;padding-bottom:15px"><!-- wp:site-title {"level":0} /--><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} --><div class="wp-block-group"><!-- wp:navigation {"ref":6,"overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /--><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Get Started</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:group --></div><!-- /wp:group -->',
);