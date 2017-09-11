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

/**
 * Class Stylesheet.
 *
 * Main class for style services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Stylesheet extends Asset {
	/**
	 * Adds a style inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		wp_register_style(
			$this->get_tag(),
			$this->get_filepath(),
			$this->get_dependencies(),
			$this->get_version(),
			$this->get_media()
		);

    	wp_enqueue_style( $this->get_tag() );
	}

	/**
	 * Media type of the styles.
	 *
	 * @return array
	 */
	public function get_media() {
		return 'all';
	}
}
