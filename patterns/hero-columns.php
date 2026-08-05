<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hero with columns
 */
return array(
	'name'        => 'hero-columns',
	'title'       => 'Hero two columns',
	'description' => 'A hero with a full height image column and a text column',
	'categories'  => array( 'appro-featured' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color"><!-- wp:columns {"verticalAlignment":null,"align":"full","style":{"spacing":{"blockGap":{"left":"0"}}}} --><div class="wp-block-columns alignfull"><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"{{PLUGIN_URL}}images/snowboarder.jpg","id":510,"dimRatio":0,"isUserOverlayColor":true,"minHeight":840,"sizeSlug":"large","layout":{"type":"constrained"}} --><div class="wp-block-cover" style="min-height:840px"><img class="wp-block-cover__image-background wp-image-510 size-large" alt="" src="{{PLUGIN_URL}}images/snowboarder.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} --><p class="has-text-align-center has-large-font-size"></p><!-- /wp:paragraph --></div></div><!-- /wp:cover --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","width":"36%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"7%","right":"7%"}}}} --><div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:7%;padding-bottom:var(--wp--preset--spacing--50);padding-left:7%;flex-basis:36%"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} --><h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color">All for you.</h1><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Bacon ipsum dolor amet buffalo kielbasa meatloaf corned beef sirloin burgdoggen bresaola brisket strip steak chicken hamburger spare ribs doner tri-tip.</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Do Something</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
);