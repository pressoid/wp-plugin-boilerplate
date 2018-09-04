<?php
/**
 * WP Plugin Boilerplate.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

/**
 * Creates and returns a shared instance of the plugin.
 *
 * @todo Change function name to your unique plugin name.
 * @todo Update prefixes in the hook functions.
 * @todo Update namespace in a docblock.
 *
 * @return \Plugin_Name\Plugin
 */
function plugin_name() {
	static $plugin = null;

	if ( null === $plugin ) {
		$plugin = require_once __DIR__ . '/plugin.php';

		register_uninstall_hook( PLUGIN_NAME_PATH, 'plugin_name_uninstall' );
		register_activation_hook( PLUGIN_NAME_PATH, 'plugin_name_activate' );
		register_deactivation_hook( PLUGIN_NAME_PATH, 'plugin_name_deactivate' );

		$plugin->register();
	}

	return $plugin;
}

/**
 * Handler for plugin's activation hook.
 *
 * @todo Update prefix of the function.
 * @todo Update namespace of the `Plugin::activate` method.
 *
 * @return void
 */
function plugin_name_activate() {
	Plugin_Name\Plugin::activate();
}

/**
 * Handler for plugin's deactivation hook.
 *
 * @todo Update prefix of the function.
 * @todo Update namespace of the `Plugin::deactivate` method.
 *
 * @return void
 */
function plugin_name_deactivate() {
	Plugin_Name\Plugin::deactivate();
}

/**
 * Handler fired on Plugin_Name uninstallation.
 *
 * @todo Update prefix of the function.
 * @todo Update namespace of the `Plugin::uninstall` method.
 *
 * @return void
 */
function plugin_name_uninstall() {
	Plugin_Name\Plugin::uninstall();
}

/**
 * Gets path to the plugin's main directory.
 *
 * @todo Update prefix of the function.
 * @todo Update name of the used constans.
 *
 * @param string $path A relative path to the base.
 * @return string
 */
function plugin_name_dir( $path = '' ) {
	if ( ! empty( $path ) ) {
		return PLUGIN_NAME_PATH . $path;
	}

	return PLUGIN_NAME_PATH;
}

/**
 * Gets url to the plugin's main directory.
 *
 * @todo Update prefix of the function.
 * @todo Update name of the used constans.
 *
 * @param string $path A relative path to the base.
 * @return string
 */
function plugin_name_url( $path = '' ) {
	if ( ! empty( $path ) ) {
		return PLUGIN_NAME_URL . $path;
	}

	return PLUGIN_NAME_URL;
}
