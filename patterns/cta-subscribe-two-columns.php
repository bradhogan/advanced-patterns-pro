<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * CTA, subscribe two columns
 */
return array(
	'name'        => 'cta-subscribe-two-columns',
	'title'       => 'Two columns w/ full height image and CTA',
	'description' => 'A good layout for a newsletter sign up',
	'categories'  => array( 'appro-cta','appro-featured' ),
	'content'     => '<!-- wp:group {"metadata":{"categories":["appro-cta"],"patternName":"all-patterns-pro/cta-subscribe-two-columns","name":"Two columns w/ full height image and CTA"},"align":"full","style":{"color":{"background":"#ffd75e"}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull has-background" style="background-color:#ffd75e"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} --><div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"center","width":"36%","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"7%","right":"7%"}}}} --><div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--70);padding-right:7%;padding-bottom:var(--wp--preset--spacing--70);padding-left:7%;flex-basis:36%"><!-- wp:heading {"textAlign":"left"} --><h2 class="wp-block-heading has-text-align-left">Subscribe to my newsletter</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Bacon ipsum dolor amet buffalo kielbasa meatloaf corned beef sirloin burgdoggen bresaola brisket strip steak chicken hamburger spare ribs doner tri-tip.</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} --><div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Join the list</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"{{PLUGIN_URL}}images/profile-large-horz.jpg","id":1228,"dimRatio":0,"isUserOverlayColor":true,"minHeight":740,"minHeightUnit":"px","isDark":false,"sizeSlug":"large","className":"m-minheight-fix","layout":{"type":"constrained"}} --><div class="wp-block-cover is-light m-minheight-fix" style="min-height:740px"><img class="wp-block-cover__image-background wp-image-1228 size-large" alt="" src="{{PLUGIN_URL}}images/profile-large-horz.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} --><p class="has-text-align-center has-large-font-size"></p><!-- /wp:paragraph --></div></div><!-- /wp:cover --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
);