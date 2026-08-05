<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hero content bottom centered
 */
return array(
	'name'        => 'hero-bottom-centered',
	'title'       => 'Hero with bottom centered content',
	'description' => 'Big heading to the left, buttons and paragraph to the right.',
	'categories'  => array( 'appro-featured' ),
	'content'     => '<!-- wp:cover {"url":"{{PLUGIN_URL}}images/yoga.jpg","id":631,"dimRatio":50,"isUserOverlayColor":true,"minHeight":820,"contentPosition":"bottom center","sizeSlug":"large","metadata":{"categories":["appro-featured"],"patternName":"all-patterns-pro/hero-with-card"},"align":"full","style":{"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"constrained"}} --><div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="min-height:820px"><img class="wp-block-cover__image-background wp-image-631 size-large" alt="" src="{{PLUGIN_URL}}images/yoga.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} --><div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":""} --><div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Shaping your next move.</h1><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"bottom","width":""} --><div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} --><div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button">Classes</a></div><!-- /wp:button --><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} --><div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button">Learn More</a></div><!-- /wp:button --></div><!-- /wp:buttons --><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">Bacon ipsum dolor amet beef ribs sausage pork sirloin pork chop. Sausage spare ribs tongue doner t-bone pastrami, ground round pancetta prosciutto pig ham.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div></div><!-- /wp:cover -->',
);