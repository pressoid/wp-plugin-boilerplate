<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Contract;

/**
 * Interface of the Service Provider.
 *
 * Generic interface for all providers.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Contract
 * @author  Your Name <email@example.com>
 */
interface Service_Provider_Interface extends Registrar_Interface {
	/**
	 * Defines services collection of the provider.
	 *
	 * @return array
	 */
	public function services();
}
