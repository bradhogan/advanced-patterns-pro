<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Featured banner with heading
 */
return array(
	'name'        => 'featured-banner',
	'title'       => 'Banner with heading and cta',
	'description' => 'A banner with a heading and call-to-action button',
	'categories'  => array( 'appro-featured','appro-text','appro-cta' ),
	'content'     => '<!-- wp:cover {"overlayColor":"contrast","isUserOverlayColor":true,"align":"full","style":{"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"constrained"}} --><div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} --><h1 class="wp-block-heading has-text-align-center">Simple Banner</h1><!-- /wp:heading --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Take Action</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div></div><!-- /wp:cover -->',
);