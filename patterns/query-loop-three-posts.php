<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Query loop three posts
 */
return array(
	'name'        => 'query-loop-three-posts',
	'title'       => 'Query latest three posts',
	'description' => 'Show the three latest posts with featured image, title and excerpt',
	'categories'  => array( 'appro-query' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-query"],"patternName":"all-patterns-pro/query-loop-three-columns","name":"Query latest three posts"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"className":"has-text-align-center","style":{"typography":{"textAlign":"center"}}} --><h2 class="wp-block-heading has-text-align-center">Latest</h2><!-- /wp:heading --><!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"metadata":{"categories":["text"],"patternName":"all-patterns-pro/posts-three-columns"},"align":"wide"} --><div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} --><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /--><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /--><!-- wp:post-excerpt {"moreText":"","excerptLength":30,"fontSize":"small"} /--></div><!-- /wp:group --><!-- /wp:post-template --></div><!-- /wp:query --></div><!-- /wp:group -->',
);