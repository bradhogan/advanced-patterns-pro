<?php

/**
 * Plugin Name: Sample Plugin
 * Plugin URI: https://easydigitaldownloads.com.com/
 * Description: Illustrates how to include an updater in your plugin for EDD Software Licensing.
 * Author: Easy Digital Downloads Team
 * Author URI: https://easydigitaldownloads.com.com
 * Version: 1.0.0
 * License: GNU General Public License v2.0 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/**
* For further details please visit https://easydigitaldownloads.com/docs/software-licensing-updater-implementation-for-wordpress-plugins/
 */

/**
 * Initialize the plugin license handler and updater.
 *
 * This registry handles activating and deactivating the license key,
 * as well as checking for updates to the plugin.
 */

$sdk_handler = __DIR__ . '/vendor/easy-digital-downloads/edd-sl-sdk/edd-sl-sdk.php';
if ( file_exists( $sdk_handler ) ) {
	require_once $sdk_handler;
}

add_action(
	'edd_sl_sdk_registry',
	function ( $init ) {
		$init->register(
			array(
				'id'          => 'edd-sample-plugin',
				'url'         => 'https://easydigitaldownloads.com',
				'item_id'     => 123,
				'version'     => '1.0.0',
				'file'        => __FILE__,
				'option_name' => 'edd_sample_license_key',
				'type'        => 'plugin',
			)
		);
	}
);
