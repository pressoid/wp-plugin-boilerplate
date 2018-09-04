<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Contract;

/**
 * Interface of the Service Provider.
 *
 * Generic interface for all providers.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Foundation\Contract
 * @author  Your Name <email@example.com>
 */
interface Service_Provider extends Registrar {
	/**
	 * Bootstraps provider and registers defined services.
	 *
	 * @return void
	 */
	public function boot();
}
