<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header w/ dark background
 */
return array(
	'name'        => 'header-dark-background',
	'title'       => 'Header with dark background',
	'description' => 'Simple header bar with a dark background',
	'categories'  => array( 'header' ),
	'content'     => '<!-- wp:cover {"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":100,"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"base","layout":{"type":"constrained"}} --><div class="wp-block-cover alignfull has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --><div class="wp-block-group alignwide"><!-- wp:image {"id":920,"width":"150px","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"100px"},"color":{"duotone":["#FFFFFF","#ffffff"]}}} --><figure class="wp-block-image size-full is-resized"><img src="{{PLUGIN_URL}}images/logo-1.png" alt="" class="wp-image-920" style="width:150px"/></figure><!-- /wp:image --><!-- wp:navigation {"ref":6,"textColor":"base","backgroundColor":"contrast","overlay":"navigation-overlay","layout":{"type":"flex","justifyContent":"center"}} /--><!-- wp:social-links {"iconColor":"base","iconColorValue":"#FFFFFF","className":"is-style-logos-only hide-on-mobile","layout":{"type":"flex","justifyContent":"right"}} --><ul class="wp-block-social-links has-icon-color is-style-logos-only hide-on-mobile"><!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"youtube"} /--><!-- wp:social-link {"url":"#","service":"facebook"} /--></ul><!-- /wp:social-links --></div><!-- /wp:group --></div></div><!-- /wp:cover -->',
);