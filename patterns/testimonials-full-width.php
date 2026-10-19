<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Testimonial, full width
 */
return array(
	'name'        => 'testimonials-full-width',
	'title'       => 'Testimonial full width',
	'description' => 'A single testimonial on a full width background',
	'categories'  => array( 'appro-testimonials' ),
	'content'     => '<!-- wp:cover {"overlayColor":"contrast","isUserOverlayColor":true,"metadata":{"categories":["testimonials"],"patternName":"all-patterns-pro/testimonials-full-width","name":"Testimonial full width"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --><div class="wp-block-cover alignfull" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:paragraph {"className":"has-text-align-center","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} --><p class="has-text-align-center has-large-font-size">"Bacon ipsum dolor amet ball tip kevin cupim jowl pork belly. Burgdoggen beef ribs drumstick, kielbasa picanha porchetta sausage. Chislic porchetta ribeye, spare ribs meatball t-bone tail capicola shankle tongue filet mignon."</p><!-- /wp:paragraph --><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} --><div class="wp-block-group"><!-- wp:image {"id":63,"width":"80px","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image size-large is-resized is-style-rounded"><img src="{{PLUGIN_URL}}images/profile-1.jpg" alt="woman in black and white stripe shirt" class="wp-image-63" style="width:80px"/></figure><!-- /wp:image --><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} --><div class="wp-block-group"><!-- wp:paragraph --><p><strong>Whit Stuban</strong>, <em>Founder</em></p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">Salt Lake City, UT</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group --></div><!-- /wp:group --></div></div><!-- /wp:cover -->',
);