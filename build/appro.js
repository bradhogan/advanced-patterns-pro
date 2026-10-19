/**
 * Advanced Patterns Pro
 * - Adds blockId + blockRel attributes/controls for all blocks
 * - Adds approMakeClickable toggle for core/group + core/cover + core/column
 * - Adds approReverseMobile toggle for core/columns
 * - Keeps existing pricing toggle behavior
 */
 
( function( wp ) {
	var addFilter = wp.hooks.addFilter;
	var createElement = wp.element.createElement;
	var Fragment = wp.element.Fragment;

	var InspectorAdvancedControls = wp.blockEditor.InspectorAdvancedControls;
	var InspectorControls = wp.blockEditor.InspectorControls;

	var TextControl = wp.components.TextControl;
	var ToggleControl = wp.components.ToggleControl;
	var PanelBody = wp.components.PanelBody;

	var createHigherOrderComponent = wp.compose.createHigherOrderComponent;
	var __ = wp.i18n.__;

	var CLICKABLE_BLOCKS = [ 'core/group', 'core/cover', 'core/column' ];
	var REVERSE_MOBILE_BLOCK = 'core/columns';

	/**
	 * Add custom attributes to blocks.
	 */
	function addAttributes( settings, name ) {
		if ( typeof settings.attributes === 'undefined' ) {
			return settings;
		}

		// Add ID + rel attributes for all blocks.
		settings.attributes = Object.assign( {}, settings.attributes, {
			blockId: {
				type: 'string',
				default: ''
			},
			blockRel: {
				type: 'string',
				default: ''
			}
		} );

		// Add clickable toggle to Group/Cover/Column.
		if ( CLICKABLE_BLOCKS.indexOf( name ) !== -1 ) {
			settings.attributes = Object.assign( {}, settings.attributes, {
				approMakeClickable: {
					type: 'boolean',
					default: false
				}
			} );
		}

		// Add reverse-on-mobile toggle to Columns.
		if ( name === REVERSE_MOBILE_BLOCK ) {
			settings.attributes = Object.assign( {}, settings.attributes, {
				approReverseMobile: {
					type: 'boolean',
					default: false
				}
			} );
		}

		return settings;
	}

	addFilter(
		'blocks.registerBlockType',
		'appro/block-custom-attributes',
		addAttributes
	);

	/**
	 * Add controls to inspector.
	 */
	var withCustomControls = createHigherOrderComponent( function( BlockEdit ) {
		return function( props ) {
			var attributes = props.attributes || {};
			var setAttributes = props.setAttributes;

			var blockId = attributes.blockId || '';
			var blockRel = attributes.blockRel || '';
			var approMakeClickable = !!attributes.approMakeClickable;
			var approReverseMobile = !!attributes.approReverseMobile;

			var isClickableTarget = CLICKABLE_BLOCKS.indexOf( props.name ) !== -1;
			var isReverseMobileTarget = props.name === REVERSE_MOBILE_BLOCK;

			var children = [
				createElement( BlockEdit, props ),
				createElement(
					InspectorAdvancedControls,
					{},
					createElement( TextControl, {
						label: __( 'HTML ID', 'appro' ),
						value: blockId,
						onChange: function( value ) {
							setAttributes( { blockId: value } );
						},
						help: __( 'Add a unique ID attribute to this block.', 'appro' )
					} ),
					createElement( TextControl, {
						label: __( 'Rel Attribute', 'appro' ),
						value: blockRel,
						onChange: function( value ) {
							setAttributes( { blockRel: value } );
						},
						help: __( 'Add a rel attribute to this block (e.g., "nofollow").', 'appro' )
					} )
				)
			];

			if ( isClickableTarget ) {
				children.push(
					createElement(
						InspectorControls,
						{},
						createElement(
							PanelBody,
							{
								title: __( 'Link settings', 'advanced-patterns-pro' ),
								initialOpen: true
							},
							createElement( ToggleControl, {
								label: __( 'Make block clickable', 'advanced-patterns-pro' ),
								help: __( 'Stretch first inner link to entire block.', 'advanced-patterns-pro' ),
								checked: approMakeClickable,
								onChange: function( value ) {
									setAttributes( { approMakeClickable: !!value } );
								}
							} )
						)
					)
				);
			}

			if ( isReverseMobileTarget ) {
				children.push(
					createElement(
						InspectorControls,
						{},
						createElement(
							PanelBody,
							{
								title: __( 'Layout', 'advanced-patterns-pro' ),
								initialOpen: true
							},
							createElement( ToggleControl, {
								label: __( 'Reverse on mobile', 'advanced-patterns-pro' ),
								checked: approReverseMobile,
								onChange: function( value ) {
									setAttributes( { approReverseMobile: !!value } );
								}
							} )
						)
					)
				);
			}

			return createElement( Fragment, {}, children );
		};
	}, 'withCustomControls' );

	addFilter(
		'editor.BlockEdit',
		'appro/with-custom-controls',
		withCustomControls
	);

} )( window.wp );

/**
 * Existing pricing toggle behavior.
 */
document.addEventListener( 'DOMContentLoaded', function() {
	document.querySelectorAll( '.toggle-controls button' ).forEach( function( button ) {
		button.addEventListener( 'click', function( event ) {
			event.preventDefault();

			var parentDiv = button.closest( '[rel]' );

			if ( parentDiv ) {
				var relValue = parentDiv.getAttribute( 'rel' );

				document.querySelectorAll( '.toggle-controls [rel]' ).forEach( function( div ) {
					div.classList.remove( 'active' );
				} );

				document.querySelectorAll( '.pricing-options' ).forEach( function( option ) {
					option.classList.remove( 'active' );
				} );

				parentDiv.classList.add( 'active' );

				var target = document.querySelector( '.pricing-options[rel="' + relValue + '"]' );
				if ( target ) {
					target.classList.add( 'active' );
				}
			}
		} );
	} );
} );