<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Two columns, text and image
 */
return array(
	'name'        => 'columns-text-left-image-right',
	'title'       => 'Two columns, text and image',
	'description' => 'Two columns, left has content, right has image',
	'categories'  => array( 'appro-text' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-text"],"patternName":"all-patterns-pro/two-columns-text-image"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"metadata":{"categories":["text"],"patternName":"all-patterns-pro/two-columns-text-left"},"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --><div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":""} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading --><h2 class="wp-block-heading">Content left.</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Bacon ipsum dolor amet swine meatball shankle shoulder ball tip. Frankfurter landjaeger porchetta boudin picanha bresaola brisket pork chop. </p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":392,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/keyboard.jpg" alt="" class="wp-image-392"/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
);