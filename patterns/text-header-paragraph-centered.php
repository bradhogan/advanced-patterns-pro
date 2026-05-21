<?php
// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Simple header and paragraph centered
 */
return array(
	'name'        => 'text-header-paragraph-centered',
	'title'       => 'Header and paragraph (centered)',
	'description' => 'Simple header and paragraph text centered',
	'categories'  => array( 'appro-text' ),
	'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center"} --><h2 class="wp-block-heading has-text-align-center">Our story</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Bacon ipsum dolor amet flank sirloin venison tail, alcatra turducken shoulder. Shank strip steak sirloin ribeye landjaeger tail olor amet flank sirloin venison tail, alcatra turducken shoulder.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
);