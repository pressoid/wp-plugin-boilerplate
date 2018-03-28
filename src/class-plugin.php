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

namespace Plugin_Name;

use Plugin_Name\Contracts\Registrar_Interface;
use Plugin_Name\Contracts\Service_Provider_Interface;

/**
 * Class Plugin.
 *
 * Main class that registers and bootstraps
 * all configured services providers.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
final class Plugin implements Registrar_Interface {
	/**
	 * Name of the plugin.
	 *
	 * @todo Update plugin name.
	 *
	 * @var string
	 */
	const NAME = 'plugin_name';

	/**
	 * Version number of the plugin.
	 *
	 * @todo Update plugin version.
	 *
	 * @var string
	 */
	const VERSION = '1.0.0';

	/**
	 * Collection of providers.
	 *
	 * @var \Plugin_Name\Contracts\Service_Provider_Interface[]
	 */
	protected $providers;

	/**
	 * Constructs plugin.
	 *
	 * @param \Plugin_Name\Contracts\Service_Provider_Interface[] $providers Collection of providers to bootstrap.
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
		foreach ( $this->providers as $provider ) {
			$provider->boot();
		}
	}

	/**
	 * Procedures that need to be run on plugin activation.
	 *
	 * @todo Implement activation logic.
	 *
	 * @return void
	 */
	public static function activate() {
	}

	/**
	 * Procedures that need to be run on plugin deactivation.
	 *
	 * @todo Implement deactivation logic.
	 *
	 * @return void
	 */
	public static function deactivate() {
	}

	/**
	 * Procedures that need to be run on plugin uninstallation.
	 *
	 * @todo Implement uninstallation logic.
	 *
	 * @return void
	 */
	public static function uninstall() {
	}

	/**
	 * Gets collection of providers.
	 *
	 * @return \Plugin_Name\Contracts\Service_Provider_Interface[]
	 */
	public function get_providers() {
		return $this->providers;
	}
}
