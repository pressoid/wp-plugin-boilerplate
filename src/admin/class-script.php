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
 * Class Script.
 *
 * Main class for script services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Script extends Asset {
	/**
	 * Adds a script inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		$this->registerScript();
		$this->localizeScript();
		$this->enqueueScript();
	}

	/**
	 * Registers a script.
	 *
	 * @return void
	 */
	protected function registerScript() {
		wp_register_script(
			$this->get_tag(),
			$this->get_filepath(),
			$this->get_dependencies(),
			$this->get_version(),
			$this->in_footer()
		);
	}

	/**
	 * Localizes a script if it has any localizaction data.
	 *
	 * @return void
	 */
	protected function localizeScript() {
		if ( ! empty( $this->get_localization() ) ) {
			wp_localize_script(
				$this->get_tag(),
				$this->get_variable(),
				$this->get_localization()
			);
		}
	}

	/**
	 * Enquques a script.
	 *
	 * @return void
	 */
	protected function enqueueScript() {
		wp_enqueue_script( $this->get_tag() );
	}

	/**
	 * Gets the global variable name for the script.
	 *
	 * @throws RuntimeException If script does not implement `get_variable()` method.
	 * @return void
	 */
	public function get_variable() {
		throw new RuntimeException( 'Script does not implement `get_variable()` method.' );
	}

	/**
	 * Gets a localizaction dataset for the script.
	 *
	 * @return array
	 */
	public function get_localization() {
		return [];
	}

	/**
	 * Output script in the footer.
	 *
	 * @return array
	 */
	public function in_footer() {
		return true;
	}
}
