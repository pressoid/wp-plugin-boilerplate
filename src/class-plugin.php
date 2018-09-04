<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name;

use Plugin_Name\Contract\Registrar;
use Plugin_Name\Contract\Service_Provider as Interface_Service_Provider;

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
final class Plugin implements Registrar {
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
	 * @var \Plugin_Name\Contract\Service_Provider[]
	 */
	protected $providers;

	/**
	 * Constructs plugin.
	 *
	 * @param \Plugin_Name\Contract\Service_Provider[] $providers Collection of providers to bootstrap.
	 */
	public function __construct( array $providers ) {
		$this->providers = apply_filters( 'plugin_name_providers', $providers );
	}

	/**
	 * Bootstraps plugin defined providers.
	 *
	 * @return void
	 */
	public function register() {
		foreach ( $this->providers as $provider ) {
			if ( is_string( $provider ) ) {
				$provider = new $provider();
			}

			if ( ! $provider instanceof Interface_Service_Provider ) {
				$name = get_class( $provider );

				throw new Not_Recognized_Service_Exception( "Class [{$name}] is not recognized as service provider. Make sure it implements proper interface." );
			}

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
	 * @return \Plugin_Name\Contract\Service_Provider[]
	 */
	public function get_providers() {
		return $this->providers;
	}
}
