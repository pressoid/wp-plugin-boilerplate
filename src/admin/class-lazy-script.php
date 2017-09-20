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

namespace Plugin_Name\Admin;

use RuntimeException;

/**
 * Class Lazy Script.
 *
 * Main class for script services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Lazy_Script extends Script {
	/**
	 * Register a script inside WordPress, but do not enqueue it.
	 *
	 * @return void
	 */
	public function register() {
		$this->register_script();
		$this->localize_script();
	}
}
