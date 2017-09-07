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
