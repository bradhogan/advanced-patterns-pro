<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Simple, large testimonial
 */
return array(
	'name'        => 'testimonial-simple-large',
	'title'       => 'Simple, large testimonial',
	'description' => 'Spans the full width of the content container',
	'categories'  => array( 'appro-testimonials' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-text"],"patternName":"all-patterns-pro/text-large-wide"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} --><div class="wp-block-group alignwide"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">"Testimonial that spans the entire width of the page and uses the heading style. Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip steak sirloin ribeye landjaeger tail."</h3><!-- /wp:heading --><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} --><p class="has-small-font-size" style="font-style:normal;font-weight:500">- BRAD HOGAN, <em>Founder</em></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group -->',
);