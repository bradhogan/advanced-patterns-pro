function getToggleScope( button, fallbackRoot ) {
	return button.closest( '.appro-pricing-toggle' ) || fallbackRoot;
}

function approHandleToggleClick( fallbackRoot, button ) {
	var parentDiv = button.closest( '[rel]' );

	if ( ! parentDiv ) {
		return;
	}

	var relValue = parentDiv.getAttribute( 'rel' );
	var scope = getToggleScope( button, fallbackRoot );

	scope.querySelectorAll( '.toggle-controls [rel]' ).forEach( function( div ) {
		div.classList.remove( 'active' );
	} );

	scope.querySelectorAll( '.pricing-options' ).forEach( function( option ) {
		option.classList.remove( 'active' );
	} );

	parentDiv.classList.add( 'active' );

	var targetOption = scope.querySelector( '.pricing-options[rel="' + relValue + '"]' );
	if ( targetOption ) {
		targetOption.classList.add( 'active' );
	}
}

function isInteractiveElement( element ) {
	return !! element.closest(
		'a, button, input, select, textarea, summary, [role="button"], [contenteditable="true"], .wp-block-button'
	);
}

function getPrimaryLink( container ) {
	var links = container.querySelectorAll( 'a[href]' );
	var fallback = null;

	for ( var i = 0; i < links.length; i++ ) {
		var link = links[i];
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

function handleClickableBlock( event, block ) {
	if ( isInteractiveElement( event.target ) || event.defaultPrevented ) {
		return;
	}

	var primaryLink = getPrimaryLink( block );
	if ( ! primaryLink || ! primaryLink.href ) {
		return;
	}

	if ( event.metaKey || event.ctrlKey || event.shiftKey || event.altKey ) {
		primaryLink.dispatchEvent(
			new MouseEvent( 'click', {
				bubbles: true,
				cancelable: true,
				ctrlKey: event.ctrlKey,
				metaKey: event.metaKey,
				shiftKey: event.shiftKey,
				altKey: event.altKey
			} )
		);
		return;
	}

	primaryLink.click();
}

function bindApproInteractions( doc ) {
	if ( ! doc || doc.__approInteractionsBound ) {
		return;
	}

	doc.__approInteractionsBound = true;

	doc.addEventListener( 'click', function( event ) {
		var toggleButton = event.target.closest( '.toggle-controls button' );
		if ( toggleButton ) {
			event.preventDefault();
			approHandleToggleClick( doc, toggleButton );
			return;
		}

		var clickableBlock = event.target.closest( '.appro-clickable-block[data-appro-clickable="true"]' );
		if ( clickableBlock ) {
			handleClickableBlock( event, clickableBlock );
		}
	} );
}

document.addEventListener( 'DOMContentLoaded', function() {
	bindApproInteractions( document );

	var editorIframe = document.querySelector( 'iframe[name="editor-canvas"]' );
	if ( editorIframe ) {
		editorIframe.addEventListener( 'load', function() {
			try {
				bindApproInteractions( editorIframe.contentDocument );
			} catch ( e ) {
				// Ignore iframe access issues.
			}
		} );

		try {
			if ( editorIframe.contentDocument ) {
				bindApproInteractions( editorIframe.contentDocument );
			}
		} catch ( e ) {
			// Ignore iframe access issues.
		}
	}
} );
