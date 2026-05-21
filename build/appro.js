/**
 * Add ID, rel, and clickable block controls to the block inspector.
 */
( function( wp ) {
	var addFilter = wp.hooks.addFilter;
	var createElement = wp.element.createElement;
	var Fragment = wp.element.Fragment;
	var InspectorAdvancedControls = wp.blockEditor.InspectorAdvancedControls;
	var InspectorControls = wp.blockEditor.InspectorControls;
	var PanelBody = wp.components.PanelBody;
	var TextControl = wp.components.TextControl;
	var ToggleControl = wp.components.ToggleControl;
	var createHigherOrderComponent = wp.compose.createHigherOrderComponent;
	var __ = wp.i18n.__;

	function addAttributes( settings, name ) {
		if ( typeof settings.attributes !== 'undefined' ) {
			settings.attributes = Object.assign( settings.attributes, {
				blockId: {
					type: 'string',
					default: ''
				},
				blockRel: {
					type: 'string',
					default: ''
				}
			} );

			if ( name === 'core/cover' || name === 'core/group' ) {
				settings.attributes = Object.assign( settings.attributes, {
					makeBlockClickable: {
						type: 'boolean',
						default: false
					}
				} );
			}
		}

		return settings;
	}

	addFilter(
		'blocks.registerBlockType',
		'appro/block-id-rel-attributes',
		addAttributes
	);

	var withAdvancedPatternsControls = createHigherOrderComponent( function( BlockEdit ) {
		return function( props ) {
			var attributes = props.attributes;
			var setAttributes = props.setAttributes;
			var blockId = attributes.blockId || '';
			var blockRel = attributes.blockRel || '';
			var makeBlockClickable = !! attributes.makeBlockClickable;
			var supportsClickable = props.name === 'core/cover' || props.name === 'core/group';

			return createElement(
				Fragment,
				{},
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
				),
				supportsClickable && createElement(
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
							checked: makeBlockClickable,
							onChange: function( value ) {
								setAttributes( { makeBlockClickable: value } );
							},
							help: __( 'Stretch first inner link to entire block.', 'advanced-patterns-pro' )
						} )
					)
				)
			);
		};
	}, 'withAdvancedPatternsControls' );

	addFilter(
		'editor.BlockEdit',
		'appro/with-advanced-patterns-controls',
		withAdvancedPatternsControls
	);

} )( window.wp );

// Frontend and editor click delegation for clickable Group/Cover blocks.
document.addEventListener( 'DOMContentLoaded', function() {
	document.querySelectorAll( '.toggle-controls button' ).forEach( function( button ) {
		button.addEventListener( 'click', function( event ) {
			event.preventDefault();

			const parentDiv = button.closest( '[rel]' );

			if ( parentDiv ) {
				const relValue = parentDiv.getAttribute( 'rel' );

				document.querySelectorAll( '.toggle-controls [rel]' ).forEach( function( div ) {
					div.classList.remove( 'active' );
				} );
				document.querySelectorAll( '.pricing-options' ).forEach( function( option ) {
					option.classList.remove( 'active' );
				} );

				parentDiv.classList.add( 'active' );
				const targetOption = document.querySelector( '.pricing-options[rel="' + relValue + '"]' );
				if ( targetOption ) {
					targetOption.classList.add( 'active' );
				}
			}
		} );
	} );

	function isInteractiveElement( element ) {
		return !! element.closest( 'a, button, input, select, textarea, summary, [role="button"], .wp-block-button' );
	}

	function getPrimaryLink( container ) {
		var links = container.querySelectorAll( 'a[href]' );
		var fallback = null;

		for ( var i = 0; i < links.length; i++ ) {
			var link = links[i];
			if ( link.classList.contains( 'appro-clickable-block__overlay' ) ) {
				continue;
			}

			var href = ( link.getAttribute( 'href' ) || '' ).trim();
			if ( ! href ) {
				continue;
			}

			if ( ! fallback ) {
				fallback = link;
			}

			if ( ! link.closest( '.wp-block-button' ) ) {
				return link;
			}
		}

		return fallback;
	}

	function handleClickableBlock( event ) {
		var container = event.currentTarget;

		if ( isInteractiveElement( event.target ) ) {
			return;
		}

		var primaryLink = getPrimaryLink( container );
		if ( ! primaryLink ) {
			return;
		}

		var href = primaryLink.getAttribute( 'href' );
		if ( ! href ) {
			return;
		}

		if ( event.metaKey || event.ctrlKey ) {
			window.open( href, primaryLink.getAttribute( 'target' ) || '_blank' );
			return;
		}

		if ( primaryLink.getAttribute( 'target' ) === '_blank' ) {
			window.open( href, '_blank' );
			return;
		}

		window.location.href = href;
	}

	document.querySelectorAll( '.appro-clickable-block[data-appro-clickable="true"]' ).forEach( function( block ) {
		block.style.cursor = 'pointer';
		block.addEventListener( 'click', handleClickableBlock );
	} );
} );
