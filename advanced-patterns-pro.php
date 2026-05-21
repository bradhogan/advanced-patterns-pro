<?php
/**
 * Plugin Name: Advanced Patterns Pro
 * Plugin URI: https://advancedpatternspro.com
 * Description: A collection of gorgeous designs that work with any WordPress theme.  Enjoy!
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
 * Register block styles
 */
function advancedpatternspro_register_block_styles() {
	register_block_style(
	'core/list',
		array(
			'name'         => 'checkmarks',
			'label'        => __( 'Checkmarks', 'appro' )
		)
	);
	register_block_style(
		'core/list',
		array(
			'name'         => 'lines',
			'label'        => __( 'Lines', 'appro' )
		)
	);
	register_block_style(
		'core/post-terms',
		array(
			'name'         => 'pill',
			'label'        => __( 'Pill', 'appro' )
		)
	);
	register_block_style(
		'core/gallery',
		array(
			'name'         => 'has-vertical-align',
			'label'        => __( 'Vertically Align', 'appro' )
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'         => 'icon-block',
			'label'        => __( 'Icon Block', 'appro' )
		)
	);
}
add_action( 'init', 'advancedpatternspro_register_block_styles' );


/**
 * Register custom pattern categories.
 */
function advancedpatternspro_register_categories() {
	// register_block_pattern_category introduced in WP 5.8
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}
	
	// Define your custom pattern categories here.
	$categories = array(
		'appro-full'  => array( 'label' => __( 'APPro: Full Layouts', 'advanced-patterns-pro' ) ),
		'appro-text'  => array( 'label' => __( 'APPro: Text', 'advanced-patterns-pro' ) ),
		'appro-courses'  => array( 'label' => __( 'APPro: Courses', 'advanced-patterns-pro' ) ),
		'appro-pricing'  => array( 'label' => __( 'APPro: Pricing', 'advanced-patterns-pro' ) ),
		'appro-authors'  => array( 'label' => __( 'APPro: Authors', 'advanced-patterns-pro' ) ),
		'appro-featured'  => array( 'label' => __( 'APPro: Featured', 'advanced-patterns-pro' ) ),
		'appro-testimonials'  => array( 'label' => __( 'APPro: Testimonials', 'advanced-patterns-pro' ) ),
		'appro-logos'  => array( 'label' => __( 'APPro: Logos', 'advanced-patterns-pro' ) ),
		'appro-query'  => array( 'label' => __( 'APPro: Query', 'advanced-patterns-pro' ) ),
		'appro-video'  => array( 'label' => __( 'APPro: Video', 'advanced-patterns-pro' ) ),
		'appro-cta'  => array( 'label' => __( 'APPro: CTA', 'advanced-patterns-pro' ) ),
	);

	// Register each category.
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
 *  - 'title'   => 'Human readable title'
 *  - 'content' => 'Block markup HTML string' (may include the string "{{PLUGIN_URL}}" which will be replaced with the plugin URL)
 *
 * Optional keys:
 *  - 'name' (slug)
 *  - 'description'
 *  - 'categories' => array( 'category-slug' )
 */
 

function advancedpatternspro_register_patterns() {
	
	// register_block_pattern introduced in WP 5.5
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
		// Skip non-files
		if ( ! is_file( $file ) ) {
			continue;
		}

		// Include the file. Each pattern file should return an array.
		$pattern = include $file;

		if ( empty( $pattern ) || ! is_array( $pattern ) ) {
			// Not a valid pattern definition; skip it.
			continue;
		}

		// Required fields
		if ( empty( $pattern['title'] ) || empty( $pattern['content'] ) ) {
			continue;
		}

		// Determine slug (name)
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

		// Register the pattern.
		register_block_pattern( $name, $args );
	}
}
add_action( 'init', 'advancedpatternspro_register_patterns' );

/**
 * Enqueue the plugin's build CSS for both editor and front-end.
 * enqueue_block_assets runs for both editor and front-end (WP 5.8+).
 */
function advancedpatternspro_enqueue_assets() {
	$css_file = advancedpatternspro_PLUGIN_DIR . 'build/styles.css';
	$css_url  = advancedpatternspro_PLUGIN_URL . 'build/styles.css';

	if ( ! file_exists( $css_file ) ) {
		return;
	}
	
	$css_ver = filemtime( $css_file );

	wp_enqueue_style(
		'advanced-patterns-pro-styles',
		$css_url,
		array(),
		$css_ver
	);
	
	$js_file = advancedpatternspro_PLUGIN_DIR . 'build/appro.js';
	$js_url  = advancedpatternspro_PLUGIN_URL . 'build/appro.js';
	
	if ( ! file_exists( $js_file ) ) {
		return;
	}
	
	$js_ver = filemtime( $js_file );
	
	wp_enqueue_script(
		'advanced-patterns-pro-js',
		$js_url,
		array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n', 'wp-hooks', 'wp-compose', 'wp-block-editor' ),
		$js_ver,
		true
	);
	
}
add_action( 'enqueue_block_assets', 'advancedpatternspro_enqueue_assets' );


/**
 * Allow SVG uploads
 */
function cc_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


/**
 * Register custom block attributes for ID, rel, and clickable block support.
 */
function appro_register_block_id_rel_attributes() {
	$block_types = WP_Block_Type_Registry::get_instance()->get_all_registered();
	
	foreach ( $block_types as $block_type ) {
		$attributes = is_array( $block_type->attributes ) ? $block_type->attributes : array();
		$new_attributes = array();

		if ( ! isset( $attributes['blockId'] ) ) {
			$new_attributes['blockId'] = array(
				'type' => 'string',
				'default' => '',
			);
		}

		if ( ! isset( $attributes['blockRel'] ) ) {
			$new_attributes['blockRel'] = array(
				'type' => 'string',
				'default' => '',
			);
		}

		if ( in_array( $block_type->name, array( 'core/cover', 'core/group' ), true ) && ! isset( $attributes['makeBlockClickable'] ) ) {
			$new_attributes['makeBlockClickable'] = array(
				'type'    => 'boolean',
				'default' => false,
			);
		}

		if ( empty( $new_attributes ) ) {
			continue;
		}
		
		register_block_type_from_metadata(
			$block_type->name,
			array(
				'attributes' => array_merge( $attributes, $new_attributes ),
			)
		);
	}
}
add_action( 'init', 'appro_register_block_id_rel_attributes', 11 );


/**
 * Add ID and rel attributes to block output.
 */
function appro_add_block_id_rel_attributes( $block_content, $block ) {
	// Skip if block has no content or is empty.
	if ( empty( $block_content ) || ! isset( $block['attrs'] ) ) {
		return $block_content;
	}
	
	$block_id  = isset( $block['attrs']['blockId'] ) ? $block['attrs']['blockId'] : '';
	$block_rel = isset( $block['attrs']['blockRel'] ) ? $block['attrs']['blockRel'] : '';
	
	// If neither attribute is set, return original content.
	if ( empty( $block_id ) && empty( $block_rel ) ) {
		return $block_content;
	}
	
	// Parse the block content to add attributes.
	$processor = new WP_HTML_Tag_Processor( $block_content );
	
	// Find the first tag in the block.
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
 * Make Cover and Group blocks clickable by stretching the first inner link.
 */
function appro_make_block_clickable( $block_content, $block ) {
	if ( empty( $block_content ) || empty( $block['blockName'] ) || empty( $block['attrs']['makeBlockClickable'] ) ) {
		return $block_content;
	}

	if ( ! in_array( $block['blockName'], array( 'core/cover', 'core/group' ), true ) ) {
		return $block_content;
	}

	if ( ! class_exists( 'DOMDocument' ) ) {
		return $block_content;
	}

	libxml_use_internal_errors( true );

	$dom = new DOMDocument();
	$loaded = $dom->loadHTML(
		'<?xml encoding="utf-8" ?><div id="appro-clickable-wrapper">' . $block_content . '</div>',
		LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
	);

	if ( ! $loaded ) {
		libxml_clear_errors();
		return $block_content;
	}

	$xpath = new DOMXPath( $dom );
	$wrapper = $dom->getElementById( 'appro-clickable-wrapper' );

	if ( ! $wrapper ) {
		libxml_clear_errors();
		return $block_content;
	}

	$root_element = null;
	foreach ( $wrapper->childNodes as $child_node ) {
		if ( XML_ELEMENT_NODE === $child_node->nodeType ) {
			$root_element = $child_node;
			break;
		}
	}

	if ( ! $root_element ) {
		libxml_clear_errors();
		return $block_content;
	}

	$link_nodes = $xpath->query( './/a[@href]', $root_element );
	if ( ! $link_nodes || 0 === $link_nodes->length ) {
		libxml_clear_errors();
		return $block_content;
	}

	$primary_link = null;
	foreach ( $link_nodes as $link_node ) {
		$href = trim( (string) $link_node->getAttribute( 'href' ) );
		if ( '' === $href ) {
			continue;
		}

		$primary_link = $link_node;
		break;
	}

	if ( ! $primary_link ) {
		libxml_clear_errors();
		return $block_content;
	}

	$existing_class = $root_element->getAttribute( 'class' );
	$classes = preg_split( '/\s+/', trim( $existing_class ) );
	$classes = is_array( $classes ) ? array_filter( $classes ) : array();
	$classes[] = 'appro-clickable-block';
	$root_element->setAttribute( 'class', implode( ' ', array_unique( $classes ) ) );

	$primary_link_class = $primary_link->getAttribute( 'class' );
	$link_classes = preg_split( '/\s+/', trim( $primary_link_class ) );
	$link_classes = is_array( $link_classes ) ? array_filter( $link_classes ) : array();
	$link_classes[] = 'appro-clickable-block__link';
	$primary_link->setAttribute( 'class', implode( ' ', array_unique( $link_classes ) ) );
	$primary_link->setAttribute( 'aria-label', wp_strip_all_tags( $primary_link->textContent ) );

	$inner_content = '';
	foreach ( $wrapper->childNodes as $child ) {
		$inner_content .= $dom->saveHTML( $child );
	}

	libxml_clear_errors();
	return $inner_content;
}
add_filter( 'render_block', 'appro_make_block_clickable', 20, 2 );
