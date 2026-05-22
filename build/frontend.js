function getToggleScope( element, fallbackRoot ) {
	return element.closest( '.appro-pricing-toggle' ) || fallbackRoot;
}

function getToggleItems( scope ) {
	return Array.prototype.slice.call(
		scope.querySelectorAll( '.toggle-controls > .wp-block-button, .toggle-controls [data-type="core/button"]' )
	);
}

function getPricingOptions( scope ) {
	return Array.prototype.slice.call( scope.querySelectorAll( '.pricing-options' ) );
}

function syncPricingToggleState( scope ) {
	var toggleItems = getToggleItems( scope );
	var pricingOptions = getPricingOptions( scope );
	var activeIndex = -1;

	if ( ! toggleItems.length || ! pricingOptions.length ) {
		return;
	}

	pricingOptions.forEach( function( option, index ) {
		if ( activeIndex === -1 && option.classList.contains( 'active' ) ) {
			activeIndex = index;
		}
	} );

	if ( activeIndex === -1 ) {
		activeIndex = 0;
	}

	toggleItems.forEach( function( item, index ) {
		item.classList.toggle( 'active', index === activeIndex );
	} );

	pricingOptions.forEach( function( option, index ) {
		option.classList.toggle( 'active', index === activeIndex );
	} );
}

function syncAllPricingToggles( root ) {
	var scopes = root.querySelectorAll( '.appro-pricing-toggle' );

	if ( scopes.length ) {
		scopes.forEach( function( scope ) {
			syncPricingToggleState( scope );
		} );
		return;
	}

	syncPricingToggleState( root );
}

function approHandleToggleClick( fallbackRoot, toggleItem ) {
	var scope = getToggleScope( toggleItem, fallbackRoot );
	var toggleItems = getToggleItems( scope );
	var pricingOptions = getPricingOptions( scope );
	var activeIndex = toggleItems.indexOf( toggleItem.closest( '.wp-block-button, [data-type="core/button"]' ) );

	if ( activeIndex === -1 ) {
		activeIndex = toggleItems.indexOf( toggleItem );
	}

	if ( activeIndex === -1 ) {
		return;
	}

	toggleItems.forEach( function( item, index ) {
		item.classList.toggle( 'active', index === activeIndex );
	} );

	pricingOptions.forEach( function( option, index ) {
		option.classList.toggle( 'active', index === activeIndex );
	} );
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
		var toggleItem = event.target.closest(
			'.toggle-controls > .wp-block-button, .toggle-controls [data-type="core/button"]'
		);
		if ( toggleItem ) {
			event.preventDefault();
			approHandleToggleClick( doc, toggleItem );
			return;
		}

		var clickableBlock = event.target.closest( '.appro-clickable-block[data-appro-clickable="true"]' );
		if ( clickableBlock ) {
			handleClickableBlock( event, clickableBlock );
		}
	} );

	syncAllPricingToggles( doc );

	if ( window.MutationObserver ) {
		var observer = new MutationObserver( function() {
			syncAllPricingToggles( doc );
		} );

		observer.observe( doc.body, {
			childList: true,
			subtree: true,
			attributes: true,
			attributeFilter: [ 'class' ]
		} );
	}
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
