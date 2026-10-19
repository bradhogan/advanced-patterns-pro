<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Text large and full width
 */
return array(
	'name'        => 'text-large-wide',
	'title'       => 'Large paragraph text',
	'description' => 'Spans the full content container width',
	'categories'  => array( 'appro-text' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-text"],"patternName":"all-patterns-pro/text-large-wide","name":"Large paragraph text"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} --><div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Big bold statement that spans the entire width of the page.  Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip steak sirloin ribeye landjaeger tail olor amet flank sirloin venison tail, alcatra turducken shoulder.</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group -->',
);