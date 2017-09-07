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

use Plugin_Name\Contracts\Service_Interface;
use Plugin_Name\Exceptions\Not_Recognized_Service_Exception;

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
abstract class Service_Provider implements Service_Provider_Interface {
	/**
	 * Collection of service services.
	 *
	 * @var \Plugin_Name\Contracts\Service_Interface[]
	 */
	protected $services;

	/**
	 * Construct provider.
	 *
	 * @param \Plugin_Name\Contracts\Service_Interface[] $services Collection of services to register.
	 */
	public function __construct( array $services ) {
		$this->services = $services;
	}

	/**
	 * Bootstraps provider to register defined services.
	 *
	 * @return void
	 */
	abstract public function boot();

	/**
	 * Register services defined in provider.
	 *
	 * @throws Not_Recognized_Service_Exception If the service is invalid.
	 * @return void
	 */
	protected function register() {
		foreach ( apply_filters( $this->get_filter_tag(), $this->services ) as $name ) {
			$service = new $name();

			if ( ! $service instanceof Service_Interface ) {
				throw new Not_Recognized_Service_Exception( "Class [{$name}] is not recognized as service. Make sure it implements proper interface." );
			}

			$service->register();
		}
	}

	/**
	 * Gets collection of defined services.
	 *
	 * @return \Plugin_Name\Contracts\Service_Interface[]
	 */
	public function get_services() {
		return $this->services;
	}

	/**
	 * Gets name of tag for services filter.
	 *
	 * @return string
	 */
	public function get_filter_tag() {
		return Plugin::NAME . '_provider_' . static::NAME;
	}
}
