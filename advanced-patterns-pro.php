<?php
/**
 * Plugin Name: Advanced Patterns Pro
 * Plugin URI: https://advancedpatternspro.com
 * Description: Gorgeous designs using built-in WordPress blocks so your site won't break!
 * Version: 1.0.1
 * Author: Brad Hogan
 * Author URI: https://advancedpatternspro.com
 * License: Private
 * Text Domain: advanced-patterns-pro
 *
 * Copyright 2026 Brad Hogan
 *
 * This program is not free software and is not to be copied or distributed.
 */
 

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'advancedpatternspro_PLUGIN_DIR' ) ) {
	define( 'advancedpatternspro_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'advancedpatternspro_PLUGIN_URL' ) ) {
	define( 'advancedpatternspro_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}


/**
 * EDD Software Licensing SDK bootstrap.
 */
$appro_edd_sdk_handler = __DIR__ . '/vendor/easy-digital-downloads/edd-sl-sdk/edd-sl-sdk.php';
if ( file_exists( $appro_edd_sdk_handler ) ) {
	require_once $appro_edd_sdk_handler;
}

add_action(
	'edd_sl_sdk_registry',
	function ( $init ) {
		$init->register(
			array(
				'id'          => 'advanced-patterns-pro',
				'url'         => 'https://advancedpatternspro.com',
				'item_id'     => 7775,
				'version'     => '1.0.1',
				'file'        => __FILE__,
				'option_name' => 'advanced_patterns_pro_license_key',
				'type'        => 'plugin',
			)
		);
	}
);

const APP_STORE_URL  = 'https://advancedpatternspro.com';
const APP_ITEM_ID    = 7775;
const APP_ITEM_NAME  = 'Advanced Patterns Pro';
const APP_KEY_OPTION = 'advanced_patterns_pro_license_key';

function app_get_license_status() {
	$key = trim( (string) get_option( APP_KEY_OPTION ) );
	if ( '' === $key ) {
		return 'missing';
	}

	$status = get_transient( 'app_license_status' );
	if ( false !== $status ) {
		return $status;
	}

	$response = wp_remote_post(
		APP_STORE_URL,
		array(
			'timeout' => 15,
			'body'    => array(
				'edd_action' => 'check_license',
				'license'    => $key,
				'item_id'    => APP_ITEM_ID,
				'url'        => home_url(),
			),
		)
	);

	// If the store can't be reached, say nothing and try again later.
	if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {
		return 'unknown';
	}

	$data   = json_decode( wp_remote_retrieve_body( $response ) );
	$status = $data->license ?? 'unknown';

	set_transient( 'app_license_status', $status, 12 * HOUR_IN_SECONDS );

	return $status;
}

add_action(
	'admin_notices',
	function () {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		$status = app_get_license_status();
		$page   = admin_url( 'plugins.php' );

		if ( in_array( $status, array( 'missing', 'inactive', 'site_inactive' ), true ) ) {
			$message = sprintf( 'Activate your license for %s. Visit the plugin page and click Manage License.', APP_ITEM_NAME );
		} elseif ( 'expired' === $status ) {
			$message = sprintf( 'Your subscription for %s has expired. Renew it to keep getting updates and support.', APP_ITEM_NAME );
		} else {
			return;
		}

		printf(
			'<div class="notice notice-warning"><p>%s <a href="%s">%s</a></p></div>',
			esc_html( $message ),
			esc_url( $page ),
			esc_html__( 'Update license', 'advanced-patterns-pro' )
		);
	}
);

/**
 * Register block styles.
 */
function advancedpatternspro_register_block_styles() {
	register_block_style(
		'core/list',
		array(
			'name'  => 'checkmarks',
			'label' => __( 'Checkmarks', 'appro' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'lines',
			'label' => __( 'Lines', 'appro' ),
		)
	);

	register_block_style(
		'core/post-terms',
		array(
			'name'  => 'pill',
			'label' => __( 'Pill', 'appro' ),
		)
	);

	register_block_style(
		'core/gallery',
		array(
			'name'  => 'has-vertical-align',
			'label' => __( 'Vertically Align', 'appro' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'icon-block',
			'label' => __( 'Icon Block', 'appro' ),
		)
	);
}
add_action( 'init', 'advancedpatternspro_register_block_styles' );


/**
 * Register custom pattern categories.
 */
function advancedpatternspro_register_categories() {
	// register_block_pattern_category introduced in WP 5.8.
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	$categories = array(
		'appro-full'         => array( 'label' => __( 'APPro: Full Layouts', 'advanced-patterns-pro' ) ),
		'appro-text'         => array( 'label' => __( 'APPro: Text', 'advanced-patterns-pro' ) ),
		'appro-courses'      => array( 'label' => __( 'APPro: Courses', 'advanced-patterns-pro' ) ),
		'appro-pricing'      => array( 'label' => __( 'APPro: Pricing', 'advanced-patterns-pro' ) ),
		'appro-authors'      => array( 'label' => __( 'APPro: Authors', 'advanced-patterns-pro' ) ),
		'appro-featured'     => array( 'label' => __( 'APPro: Featured', 'advanced-patterns-pro' ) ),
		'appro-testimonials' => array( 'label' => __( 'APPro: Testimonials', 'advanced-patterns-pro' ) ),
		'appro-logos'        => array( 'label' => __( 'APPro: Logos', 'advanced-patterns-pro' ) ),
		'appro-query'        => array( 'label' => __( 'APPro: Query', 'advanced-patterns-pro' ) ),
		'appro-video'        => array( 'label' => __( 'APPro: Video', 'advanced-patterns-pro' ) ),
		'appro-cta'          => array( 'label' => __( 'APPro: CTA', 'advanced-patterns-pro' ) ),
	);

	foreach ( $categories as $name => $properties ) {
		if ( isset( $properties['label'] ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'advancedpatternspro_register_categories' );


/**
 * Register patterns from patterns/ directory.
 *
 * Each PHP file should return an array with at least:
 * - 'title'   => 'Human readable title'
 * - 'content' => 'Block markup HTML string'
 *
 * Optional keys:
 * - 'name' (slug)
 * - 'description'
 * - 'categories' => array( 'category-slug' )
 */
function advancedpatternspro_register_patterns() {
	// register_block_pattern introduced in WP 5.5.
	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	$patterns_dir = advancedpatternspro_PLUGIN_DIR . 'patterns/';

	if ( ! is_dir( $patterns_dir ) || ! is_readable( $patterns_dir ) ) {
		return;
	}

	$files = glob( $patterns_dir . '*.php' );
	if ( empty( $files ) ) {
		return;
	}

	foreach ( $files as $file ) {
		if ( ! is_file( $file ) ) {
			continue;
		}

		$pattern = include $file;

		if ( empty( $pattern ) || ! is_array( $pattern ) ) {
			continue;
		}

		if ( empty( $pattern['title'] ) || empty( $pattern['content'] ) ) {
			continue;
		}

		// Determine slug (name).
		if ( ! empty( $pattern['name'] ) && is_string( $pattern['name'] ) ) {
			$name = $pattern['name'];
			if ( strpos( $name, '/' ) === false ) {
				$name = 'all-patterns-pro/' . sanitize_title_with_dashes( $name );
			}
		} else {
			$name = 'all-patterns-pro/' . sanitize_title_with_dashes( $pattern['title'] );
		}

		// Replace plugin URL placeholder in content, if present.
		$content = $pattern['content'];
		if ( is_string( $content ) && strpos( $content, '{{PLUGIN_URL}}' ) !== false ) {
			$content = str_replace( '{{PLUGIN_URL}}', esc_url( advancedpatternspro_PLUGIN_URL ), $content );
		}

		$args = array(
			'title'       => wp_strip_all_tags( $pattern['title'] ),
			'description' => ! empty( $pattern['description'] ) ? wp_strip_all_tags( $pattern['description'] ) : '',
			'content'     => $content,
		);

		if ( ! empty( $pattern['categories'] ) && is_array( $pattern['categories'] ) ) {
			$args['categories'] = $pattern['categories'];
		}

		register_block_pattern( $name, $args );
	}
}
add_action( 'init', 'advancedpatternspro_register_patterns' );


/**
 * Enqueue plugin CSS/JS for editor + front-end.
 */
function advancedpatternspro_enqueue_assets() {
	$css_file = advancedpatternspro_PLUGIN_DIR . 'build/styles.css';
	$css_url  = advancedpatternspro_PLUGIN_URL . 'build/styles.css';

	if ( file_exists( $css_file ) ) {
		$css_ver = filemtime( $css_file );
		wp_enqueue_style(
			'advanced-patterns-pro-styles',
			$css_url,
			array(),
			$css_ver
		);
	}

	$js_file = advancedpatternspro_PLUGIN_DIR . 'build/appro.js';
	$js_url  = advancedpatternspro_PLUGIN_URL . 'build/appro.js';

	if ( file_exists( $js_file ) ) {
		$js_ver = filemtime( $js_file );
		wp_enqueue_script(
			'advanced-patterns-pro-js',
			$js_url,
			array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n', 'wp-hooks', 'wp-compose' ),
			$js_ver,
			true
		);
	}
}
add_action( 'enqueue_block_assets', 'advancedpatternspro_enqueue_assets' );


/**
 * Allow SVG uploads.
 */
function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


/**
 * Add ID and rel attributes to block output.
 */
function appro_add_block_id_rel_attributes( $block_content, $block ) {
	if ( empty( $block_content ) || ! isset( $block['attrs'] ) ) {
		return $block_content;
	}

	$block_id  = isset( $block['attrs']['blockId'] ) ? $block['attrs']['blockId'] : '';
	$block_rel = isset( $block['attrs']['blockRel'] ) ? $block['attrs']['blockRel'] : '';

	if ( empty( $block_id ) && empty( $block_rel ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );

	if ( $processor->next_tag() ) {
		if ( ! empty( $block_id ) ) {
			$processor->set_attribute( 'id', esc_attr( $block_id ) );
		}
		if ( ! empty( $block_rel ) ) {
			$processor->set_attribute( 'rel', esc_attr( $block_rel ) );
		}
		return $processor->get_updated_html();
	}

	return $block_content;
}
add_filter( 'render_block', 'appro_add_block_id_rel_attributes', 10, 2 );


/**
 * Helper: extract first href from HTML content.
 */
function appro_extract_first_href( $html ) {
	if ( ! is_string( $html ) || '' === $html ) {
		return '';
	}

	if ( preg_match( '/<a\s[^>]*href=(["\'])(.*?)\1/i', $html, $matches ) ) {
		return isset( $matches[2] ) ? trim( $matches[2] ) : '';
	}

	return '';
}

/**
 * Make core/group, core/cover, and core/column clickable using a stretched overlay link.
 * Requires JS attribute: approMakeClickable.
 */
function appro_make_blocks_clickable_overlay( $block_content, $block ) {
	if ( empty( $block_content ) || empty( $block['blockName'] ) ) {
		return $block_content;
	}

	if ( ! in_array( $block['blockName'], array( 'core/group', 'core/cover', 'core/column' ), true ) ) {
		return $block_content;
	}

	$attrs = isset( $block['attrs'] ) ? $block['attrs'] : array();
	if ( empty( $attrs['approMakeClickable'] ) ) {
		return $block_content;
	}

	$href = appro_extract_first_href( $block_content );
	if ( '' === $href ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );
	if ( ! $processor->next_tag() ) {
		return $block_content;
	}

	$existing_class = (string) $processor->get_attribute( 'class' );
	$classes        = preg_split( '/\s+/', trim( $existing_class ) );
	if ( ! is_array( $classes ) ) {
		$classes = array();
	}
	if ( ! in_array( 'appro-has-stretched-link', $classes, true ) ) {
		$classes[] = 'appro-has-stretched-link';
	}
	$classes = array_filter( array_unique( $classes ) );

	$processor->set_attribute( 'class', implode( ' ', $classes ) );

	$updated = $processor->get_updated_html();

	$overlay = '<a class="appro-stretched-link" href="' . esc_url( $href ) . '" aria-label="' . esc_attr__( 'Clickable block link', 'advanced-patterns-pro' ) . '"></a>';

	// Insert overlay just before final closing tag.
	$last_close_pos = strrpos( $updated, '</' );
	if ( false === $last_close_pos ) {
		return $updated . $overlay;
	}

	return substr_replace( $updated, $overlay, $last_close_pos, 0 );
}
add_filter( 'render_block', 'appro_make_blocks_clickable_overlay', 25, 2 );


/**
 * Add class to core/columns when "Reverse on mobile" is enabled.
 * Requires JS attribute: approReverseMobile.
 */
function appro_columns_reverse_mobile_class( $block_content, $block ) {
	if ( empty( $block_content ) || empty( $block['blockName'] ) ) {
		return $block_content;
	}

	if ( 'core/columns' !== $block['blockName'] ) {
		return $block_content;
	}

	$attrs = isset( $block['attrs'] ) ? $block['attrs'] : array();
	if ( empty( $attrs['approReverseMobile'] ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );
	if ( ! $processor->next_tag() ) {
		return $block_content;
	}

	$existing_class = (string) $processor->get_attribute( 'class' );
	$classes        = preg_split( '/\s+/', trim( $existing_class ) );
	if ( ! is_array( $classes ) ) {
		$classes = array();
	}
	if ( ! in_array( 'appro-reverse-mobile', $classes, true ) ) {
		$classes[] = 'appro-reverse-mobile';
	}
	$classes = array_filter( array_unique( $classes ) );

	$processor->set_attribute( 'class', implode( ' ', $classes ) );

	return $processor->get_updated_html();
}
add_filter( 'render_block', 'appro_columns_reverse_mobile_class', 30, 2 );


// Disable "Available to Install" block suggestions
function mytheme_disable_block_suggestions() {
	remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
	remove_action( 'enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory' );
}
add_action( 'admin_init', 'mytheme_disable_block_suggestions' );