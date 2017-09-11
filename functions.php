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

		register_activation_hook( __FILE__, 'plugin_name_activate' );
		register_deactivation_hook( __FILE__, 'plugin_name_deactivate' );

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

	register_uninstall_hook( __FILE__, 'plugin_name_uninstall' );
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
 * @param string $path A relative path to the base.
 * @return string
 */
function plugin_name_dir( $path = '' ) {
	$base = plugin_dir_path( __FILE__ );

	if ( ! empty( $path ) ) {
		return "{$base}{$path}";
	}

	return $base;
}

/**
 * Gets url to the plugin's main directory.
 *
 * @param string $path A relative path to the base.
 * @return string
 */
function plugin_name_url( $path = '' ) {
	$base = plugin_dir_url( __FILE__ );

	if ( ! empty( $path ) ) {
		return "{$base}{$path}";
	}

	return $base;
}
