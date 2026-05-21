<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Heading with list
 */
return array(
	'name'        => 'text-heading-with-list',
	'title'       => 'Heading with list',
	'description' => 'A multi-column layout with a heading and two lists',
	'categories'  => array( 'appro-text','appro-featured' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} --><div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%"} --><div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading {"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size">All it takes is good design.</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Bacon ipsum dolor amet turducken tail drumstick shoulder fatback venison. Fatback tongue sirloin shoulder cow.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"bottom","width":"55%"} --><div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:list {"className":"is-style-lines","fontSize":"small"} --><ul class="wp-block-list is-style-lines has-small-font-size"><!-- wp:list-item --><li>Bacon ipsum dolor</li><!-- /wp:list-item --><!-- wp:list-item --><li>Bacon ipsum dolor</li><!-- /wp:list-item --><!-- wp:list-item --><li>Bacon ipsum dolor</li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:list {"className":"is-style-lines","fontSize":"small"} --><ul class="wp-block-list is-style-lines has-small-font-size"><!-- wp:list-item --><li>Bacon ipsum dolor</li><!-- /wp:list-item --><!-- wp:list-item --><li>Bacon ipsum dolor</li><!-- /wp:list-item --><!-- wp:list-item --><li>Bacon ipsum dolor</li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
);