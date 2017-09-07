<?php

namespace Plugin_Name;

use Plugin_Name\Contracts\Registrar_Interface;
use Plugin_Name\Contracts\Service_Provider_Interface;

final class Plugin implements Registrar_Interface {
	/**
	 * Name of the plugin.
	 *
	 * @var string
	 */
	const NAME = 'plugin_name';

	/**
	 * Version of the plugin.
	 *
	 * @var string
	 */
	const VERSION = '1.0.0';

	/**
	 * Collection of providers.
	 *
	 * @var Plugin_Name\Contracts\Service_Provider_Interface[]
	 */
	protected $providers;

	/**
	 * Constructs plugin.
	 *
	 * @param Plugin_Name\Contracts\Service_Provider_Interface[] $providers
	 */
	public function __construct( array $providers ) {
		$this->providers = $providers;
	}

	/**
	 * Bootstraps plugin defined providers.
	 *
	 * @return void
	 */
	public function register() {
		foreach ( $this->providers as $porvider ) {
			$porvider->boot();
		}
	}

	/**
	 * Procedures that need to be run on plugin activation.
	 *
	 * @return void
	 */
	public static function activate() {
	}

	/**
	 * Procedures that need to be run on plugin deactivation.
	 *
	 * @return void
	 */
	public static function deactivate() {
	}

	/**
	 * Procedures that need to be run on plugin uninstallation.
	 *
	 * @return void
	 */
	public static function uninstall() {
	}

	/**
	 * Gets collection of providers.
	 *
	 * @return Plugin_Name\Contracts\Service_Provider_Interface[]
	 */
	public function get_providers() {
		return $this->providers;
	}
}