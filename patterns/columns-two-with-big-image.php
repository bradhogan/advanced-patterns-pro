<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Authors, download cta
 */
return array(
	'name'        => 'columns-two-with-big-image',
	'title'       => 'Two columns with a big image',
	'description' => 'Two columns with a heading, text, button and then a big image column.',
	'categories'  => array( 'appro-authors','appro-text','appro-courses' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-text"],"patternName":"all-patterns-pro/columns-two-with-big-image","name":"Two columns with a big image"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} --><div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} --><div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading --><h2 class="wp-block-heading">Better designs.<br>Less stress.</h2><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip steak sirloin ribeye landjaeger tail olor amet flank sirloin venison tail.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Take action</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --><!-- wp:column {"width":"70%"} --><div class="wp-block-column" style="flex-basis:70%"><!-- wp:cover {"overlayColor":"contrast-light","isUserOverlayColor":true,"isDark":false,"style":{"border":{"radius":{"topLeft":"14px","topRight":"14px","bottomLeft":"14px","bottomRight":"14px"}}},"layout":{"type":"constrained"}} --><div class="wp-block-cover is-light" style="border-top-left-radius:14px;border-top-right-radius:14px;border-bottom-left-radius:14px;border-bottom-right-radius:14px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-light-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"id":526,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="{{PLUGIN_URL}}images/book-preview.png" alt="" class="wp-image-526"/></figure><!-- /wp:image --></div></div><!-- /wp:cover --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
);