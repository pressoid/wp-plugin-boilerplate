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

use Plugin_Name\Contracts\Service_Provider as Service_Provider_Interface;

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
	 * @param \Plugin_Name\Contracts\Service_Interface[] $services
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
	 * @return void
	 */
	public function register() {
		foreach ( apply_filters( $this->get_filter_tag(), $this->services ) as $name ) {
			$service = new $name();

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
