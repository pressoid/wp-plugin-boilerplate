<?php

namespace Plugin_Name\Foundation;

use Plugin_Name\Contracts\Service_Provider as Service_Provider_Interface;

abstract class Service_Provider implements Service_Provider_Interface {
	/**
	 * Collection of service services.
	 *
	 * @var \Plugin_Name\Contracts\Service[]
	 */
	protected $services;

	/**
	 * Construct provider.
	 *
	 * @param \Plugin_Name\Contracts\Service[] $services
	 */
	public function __construct( array $services ) {
		$this->services = $services;
	}

	/**
	 * Register services defined in provider.
	 *
	 * @return void
	 */
	public function register() {
		foreach ( apply_filters( Plugin::NAME . '/provider/' . static::PROVIDER_KEY, $this->services ) as $service ) {
			$service->register();
		}
	}

	/**
	 * Gets collection of defined services.
	 *
	 * @return \Plugin_Name\Contracts\Service[]
	 */
	public function getServices() {
		return $this->services;
	}
}
