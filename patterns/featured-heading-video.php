<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Featured, heading, buttons and video
 */
return array(
	'name'        => 'featured-heading-video',
	'title'       => 'Heading with button and video',
	'description' => 'A heading with a call to action and a full page video',
	'categories'  => array( 'appro-courses','appro-featured' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-courses"],"patternName":"all-patterns-pro/featured-heading-video","name":"Heading with button and video"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left","wideSize":""}} --><div class="wp-block-group alignwide"><!-- wp:heading --><h2 class="wp-block-heading">Good designs helps your business grow #amiright.</h2><!-- /wp:heading --><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group"><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Take Action</a></div><!-- /wp:button --></div><!-- /wp:buttons --><!-- wp:paragraph --><p>30-Day Guarantee</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group --><!-- wp:cover {"url":"{{PLUGIN_URL}}images/skater.jpg","id":674,"dimRatio":0,"isUserOverlayColor":true,"minHeightUnit":"px","sizeSlug":"large","align":"wide","style":{"border":{"radius":{"topLeft":"14px","topRight":"14px","bottomLeft":"14px","bottomRight":"14px"}},"dimensions":{"aspectRatio":"16/9"}},"layout":{"type":"constrained"}} --><div class="wp-block-cover alignwide" style="border-top-left-radius:14px;border-top-right-radius:14px;border-bottom-left-radius:14px;border-bottom-right-radius:14px"><img class="wp-block-cover__image-background wp-image-674 size-large" alt="" src="{{PLUGIN_URL}}images/skater.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"lightbox":{"enabled":false},"id":779,"width":"60px","sizeSlug":"full","linkDestination":"custom","align":"center"} --><figure class="wp-block-image aligncenter size-full is-resized"><a href="#"><img src="{{PLUGIN_URL}}images/play-white.svg" alt="" class="wp-image-779" style="width:60px"/></a></figure><!-- /wp:image --></div></div><!-- /wp:cover --></div><!-- /wp:group -->',
);