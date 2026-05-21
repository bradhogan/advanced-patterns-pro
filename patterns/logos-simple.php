<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Logos, simple
 */
return array(
	'name'        => 'logos-simple',
	'title'       => 'Logos',
	'description' => 'A simple gallery with logos',
	'categories'  => array( 'appro-logos' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-logos"],"patternName":"all-patterns-pro/logos-simple","name":"Logos"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none","align":"wide","className":"is-style-has-vertical-align","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} --><figure class="wp-block-gallery alignwide has-nested-images columns-6 is-style-has-vertical-align"><!-- wp:image {"id":920,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-1.png" alt="" class="wp-image-920"/></figure><!-- /wp:image --><!-- wp:image {"id":921,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-2.png" alt="" class="wp-image-921"/></figure><!-- /wp:image --><!-- wp:image {"id":922,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-3.png" alt="" class="wp-image-922"/></figure><!-- /wp:image --><!-- wp:image {"id":923,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-4.png" alt="" class="wp-image-923"/></figure><!-- /wp:image --><!-- wp:image {"id":924,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-5.png" alt="" class="wp-image-924"/></figure><!-- /wp:image --><!-- wp:image {"id":939,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/logo-6.png" alt="" class="wp-image-939"/></figure><!-- /wp:image --></figure><!-- /wp:gallery --></div><!-- /wp:group -->',
);