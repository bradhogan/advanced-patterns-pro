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

	/**
	 * Add blockId and blockRel attributes to all blocks,
	 * plus makeBlockClickable for Cover and Group blocks.
	 */
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

	/**
	 * Add controls to the block inspector.
	 */
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

// Wait for DOM to be ready.
document.addEventListener('DOMContentLoaded', function() {
	// Attach event listeners to toggle buttons.
	document.querySelectorAll('.toggle-controls button').forEach(function(button) {
		button.addEventListener('click', function(event) {
			event.preventDefault();
			
			// Get the rel attribute from the parent div.
			const parentDiv = button.closest('[rel]');
			
			if (parentDiv) {
				const relValue = parentDiv.getAttribute('rel');
				
				// Remove active class from all button parent divs and pricing options.
				document.querySelectorAll('.toggle-controls [rel]').forEach(function(div) {
					div.classList.remove('active');
				});
				document.querySelectorAll('.pricing-options').forEach(function(option) {
					option.classList.remove('active');
				});
				
				// Add active class to parent div and corresponding pricing option.
				parentDiv.classList.add('active');
				document.querySelector('.pricing-options[rel="' + relValue + '"]').classList.add('active');
			}
		});
	});
});
