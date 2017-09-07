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

use Plugin_Name\Contracts\Service_Interface;

abstract class Shortcode implements Service_Interface {
	/**
	 * Adds a shortcode inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_shortcode( $this->get_tag(), [ $this, 'handler' ] );
	}

	/**
	 * Handles shortcode registration and rendering.
	 *
	 * @param  array $atts
	 * @param  string $content
	 * @return string
	 */
	protected function handler( array $atts, $content )
	{
		$atts = shortcode_atts(
			$this->get_defaults(),
			$atts,
			$this->get_tag()
		);

		ob_start();

		$this->render( compact( 'atts', 'content' ) );

		return ob_get_clean();
	}

	/**
	 * Gets the tag name for the shortcode.
	 *
	 * @throws \RuntimeException
	 * @return string
	 */
	public function get_tag() {
		throw new RuntimeException( 'Shortcode does not implement `get_tag()` method.' );
	}

	/**
	 * Gets the default name for the shortcode.
	 *
	 * @return array
	 */
	public function get_defaults()
	{
		return [];
	}
}
