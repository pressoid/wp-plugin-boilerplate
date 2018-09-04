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
 * Interface of Registrar.
 *
 * Subject with ability to register.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Foundation\Contract
 * @author  Your Name <email@example.com>
 */
interface Registrar {
	/**
	 * Registers current subject.
	 *
	 * @return void
	 */
	public function register();
}
