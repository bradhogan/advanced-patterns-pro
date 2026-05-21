<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Big centered heading with CTA
 */
return array(
	'name'        => 'text-heading-cta',
	'title'       => 'Big centered heading with call-to-action',
	'description' => 'Header, text and call-to-action',
	'categories'  => array( 'appro-text','appro-cta' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} --><h1 class="wp-block-heading has-text-align-center">Get ready, your sanity starts here.</h1><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Pork chop beef ribs rump chislic filet mignon tail bresaola t-bone swine alcatra cupim pig shoulder salami hamburger.  Kevin buffalo porchetta, pork meatloaf pastrami t-bone chislic short loin shank brisket andouille ham meatball pork loin.</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Make it happen</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:group -->',
);