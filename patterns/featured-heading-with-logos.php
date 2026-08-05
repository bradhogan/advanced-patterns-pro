<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Centered heading with logos
 */
return array(
	'name'        => 'featured-heading-with-logos',
	'title'       => 'Centered heading with logos',
	'description' => 'A heading with a call-to-action and logos',
	'categories'  => array( 'appro-logos','appro-featured' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4} --><h4 class="wp-block-heading has-text-align-center">All you need.</h4><!-- /wp:heading --><!-- wp:heading {"textAlign":"center","level":1} --><h1 class="wp-block-heading has-text-align-center">The best tool 🔥 to create a gorgeous website 👋.</h1><!-- /wp:heading --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get started</a></div><!-- /wp:button --></div><!-- /wp:buttons --><!-- wp:gallery {"columns":4,"imageCrop":false,"linkTo":"none","className":"is-style-has-vertical-align m-logos-nowrap","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} --><figure class="wp-block-gallery has-nested-images columns-4 is-style-has-vertical-align m-logos-nowrap" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:image {"id":939,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#CCC","#7f7f7f"]}}} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-1.png" alt="" class="wp-image-939"/></figure><!-- /wp:image --><!-- wp:image {"id":922,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#CCC","#7f7f7f"]}}} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-3.png" alt="" class="wp-image-922"/></figure><!-- /wp:image --><!-- wp:image {"id":924,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#CCC","#7f7f7f"]}}} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-2.png" alt="" class="wp-image-924"/></figure><!-- /wp:image --><!-- wp:image {"id":923,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#CCC","#7f7f7f"]}}} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-6.png" alt="" class="wp-image-923"/></figure><!-- /wp:image --></figure><!-- /wp:gallery --></div><!-- /wp:group --></div><!-- /wp:group -->',
);