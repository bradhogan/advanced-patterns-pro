<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header, menu left and buttons right
 */
return array(
	'name'        => 'header-menu-left-buttons-right',
	'title'       => 'Header menu left buttons right',
	'description' => 'Header has logo and menu left with buttons to the right',
	'categories'  => array( 'header' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["header"],"patternName":"all-patterns-pro/header-default"},"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --><div class="wp-block-group alignwide" style="padding-top:15px;padding-bottom:15px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group"><!-- wp:site-title {"level":0} /--><!-- wp:navigation {"ref":6,"overlayBackgroundColor":"base","overlayTextColor":"contrast","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} /--></div><!-- /wp:group --><!-- wp:buttons {"fontSize":"small"} --><div class="wp-block-buttons has-custom-font-size has-small-font-size"><!-- wp:button {"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"#888888"}}},"color":{"text":"#888888"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color wp-element-button" style="color:#888888">Login</a></div><!-- /wp:button --><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Get Started</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:group -->',
);