<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Two columns with header and small text.
 */
return array(
	'name'        => 'text-heading-two-columns',
	'title'       => 'Heading and text, two columns',
	'description' => 'Header in left column, text in the right',
	'categories'  => array( 'appro-text' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-text"],"patternName":"all-patterns-pro/text-heading-two-columns"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} --><div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:heading --><h2 class="wp-block-heading">You can always build a better website #amiright.</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"bottom","width":"40%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip steak sirloin ribey.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
);