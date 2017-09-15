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
		wp_register_script(
			$this->get_tag(),
			$this->get_filepath(),
			$this->get_dependencies(),
			$this->get_version(),
			$this->in_footer()
		);

		if ( ! empty( $this->get_localization() ) ) {
			wp_localize_script(
				$this->get_tag(),
				$this->get_variable(),
				$this->get_localization()
			);
		}
	}
}
