<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header, call-to-action bar
 */
return array(
	'name'        => 'header-cta-bar',
	'title'       => 'Header',
	'description' => 'Header call-to-action bar you can add below or above your main header.',
	'categories'  => array( 'header' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"accent","textColor":"base","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull has-base-color has-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:10px;padding-bottom:10px"><!-- wp:group {"className":"mp-t-10 mp-b-10 mgap-10","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} --><div class="wp-block-group mp-t-10 mp-b-10 mgap-10"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} --><p class="has-text-color has-link-color has-small-font-size" style="color:#ffffff;font-style:normal;font-weight:500">Add a simple call-to-action bar above your header.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}},"fontSize":"small"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px">Take Action</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:group -->',
);