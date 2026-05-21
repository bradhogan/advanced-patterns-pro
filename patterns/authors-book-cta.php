<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Authors, book and call-to-action
 */
return array(
	'name'        => 'authors-book-cta',
	'title'       => 'Book with call-to-action and big image',
	'description' => 'A heading, call-to-action and book image',
	'categories'  => array( 'appro-authors','appro-featured' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-authors"],"patternName":"all-patterns-pro/authors-two-columns","name":"Download"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --><div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center"} --><h2 class="wp-block-heading has-text-align-center">Explore the book.</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip steak sirloin ribeye landjaeger tail olor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip landjaeger tail. </p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","fontSize":"small"} --><div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button">Download Now</a></div><!-- /wp:button --></div><!-- /wp:buttons --><!-- wp:group {"align":"wide","className":"mp-0","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignwide mp-0" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":618,"sizeSlug":"large","linkDestination":"none","align":"wide"} --><figure class="wp-block-image alignwide size-large"><img src="{{PLUGIN_URL}}images/book-preview.png" alt="" class="wp-image-618"/></figure><!-- /wp:image --></div><!-- /wp:group --></div><!-- /wp:group --></div><!-- /wp:group -->',
);