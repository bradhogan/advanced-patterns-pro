<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Query list
 */
return array(
	'name'        => 'query-list-with-featured-image',
	'title'       => 'Query list',
	'description' => 'Featured image left, heading and excerpt right',
	'categories'  => array( 'appro-query' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-query"],"patternName":"all-patterns-pro/query-list-with-featured-image","name":"Query list"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]},"metadata":{"categories":["appro-query"],"patternName":"all-patterns-pro/query-list-with-featured-image"}} --><div class="wp-block-query"><!-- wp:post-template --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column {"width":"25%"} --><div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /--></div><!-- /wp:column --><!-- wp:column {"width":"75%"} --><div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /--><!-- wp:post-excerpt {"moreText":"","excerptLength":30,"fontSize":"small"} /--></div><!-- /wp:group --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- /wp:post-template --><!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --><!-- wp:query-no-results --><!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} --><p></p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div><!-- /wp:query --></div><!-- /wp:group -->',
);