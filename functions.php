<?php

/**
 * Creates and returns a shared instance of the plugin.
 *
 * @todo Change function name to your unique plugin name.
 * @todo Change prefixes in the hook functions.
 * @todo Update namespace in docblock.
 *
 * @return \Plugin_Name\Plugin
 */
function plugin_name() {
	static $plugin = null;

	if ( null === $plugin ) {
		$plugin = require_once __DIR__ . '/bootstrap/plugin.php';

		register_activation_hook( PLUGIN_NAME_PATH, 'plugin_name_activate' );
		register_deactivation_hook( PLUGIN_NAME_PATH, 'plugin_name_deactivate' );
		register_uninstall_hook( PLUGIN_NAME_PATH, 'plugin_name_uninstall' );

		$plugin->register();
	}

	return $plugin;
}

/**
 * Handler fired on Plugin_Name activation.
 * Here we also register additional uninstall hook.
 *
 * @todo Change prefix of the function.
 * @todo Update namespace.
 *
 * @return void
 */
function plugin_name_activate() {
	Plugin_Name\Plugin::activate();
}

/**
 * Handler fired on Plugin_Name deactivation.
 *
 * @todo Change prefix of the function.
 * @todo Update namespace.
 *
 * @return void
 */
function plugin_name_deactivate() {
	Plugin_Name\Plugin::deactivate();
}

/**
 * Handler fired on Plugin_Name uninstallation.
 *
 * @todo Change prefix of the function.
 * @todo Update namespace.
 *
 * @return void
 */
function plugin_name_uninstall() {
	Plugin_Name\Plugin::uninstall();
}

/**
 * Gets path to the plugin's main directory.
 *
 * @todo Change prefix of the function.
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
 * @todo Change prefix of the function.
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
