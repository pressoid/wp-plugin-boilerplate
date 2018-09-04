<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation;

use Plugin_Name\Exceptions\Not_Recognized_Service_Exception;
use Plugin_Name\Contract\Service as Interface_Service;
use Plugin_Name\Contract\Service_Provider as Interface_Service_Provider;

/**
 * Class Service Provider.
 *
 * General class for registering plugin's providers of services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Service_Provider implements Interface_Service_Provider {
	/**
	 * Defines services collection of the provider.
	 *
	 * @return array
	 */
	abstract public function services();

	/**
	 * Register services defined in provider.
	 *
	 * @throws Not_Recognized_Service_Exception If the service is invalid.
	 * @return void
	 */
	public function register() {
		foreach ( $this->get_services() as $service ) {
			if ( is_string( $service ) ) {
				$service = new $service();
			}

			if ( ! $service instanceof Interface_Service ) {
				$name = get_class( $service );

				throw new Not_Recognized_Service_Exception( "Class [{$name}] is not recognized as service. Make sure it implements proper interface." );
			}

			$service->register();
		}
	}

	/**
	 * Gets collection of defined services.
	 *
	 * @todo Change filter prefix to your unique plugin name.
	 * @return \Plugin_Name\Contract\Service[]
	 */
	public function get_services() {
		return apply_filters( 'plugin_name_' . $this->get_name() . '_services', $this->services() );
	}

	/**
	 * Gets name of the provider.
	 *
	 * @throws RuntimeException If provider does not defines `NAME` constans.
	 * @return string
	 */
	public function get_name() {
		if ( defined( 'static::NAME' ) ) {
			return static::NAME;
		}

		throw new RuntimeException( 'Service Provider does not define `NAME` constans.' );
	}
}
