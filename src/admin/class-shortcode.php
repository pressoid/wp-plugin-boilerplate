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

use Plugin_Name\Contracts\Renderer_Interface;
use Plugin_Name\Contracts\Service_Interface;

/**
 * Class Shortcode.
 *
 * Main class for shortcodes services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Shortcode implements Service_Interface, Renderer_Interface {
	/**
	 * Adds a shortcode inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_shortcode( $this->get_tag(), [ $this, 'handle' ] );
	}

	/**
	 * Handles shortcode registration and rendering.
	 *
	 * @param  array $atts
	 * @param  string $content
	 * @return string
	 */
	public function handle( array $atts, $content )
	{
		$attributes = $this->get_attrs( $atts );
		$context = $this->get_context( $attributes );

		ob_start();

		$this->render( compact( 'attributes', 'context', 'content' ) );

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
	 * Gets the shortcode attributes values extended by defaults.
	 *
	 * @param array $atts Attributes values passed in shortcode.
	 * @return array
	 */
	public function get_attrs( array $atts )
	{
		return shortcode_atts( $atts, $this->get_defaults(), $this->get_tag() );
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

	/**
	 * Gets the context data for the shortcode.
	 *
	 * @param array $atts Attributes values passed in shortcode.
	 * @return array
	 */
	public function get_context( array $atts )
	{
		return [];
	}
}
