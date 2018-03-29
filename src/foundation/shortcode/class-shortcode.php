<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Shortcode;

use Plugin_Name\Foundation\Service;
use Plugin_Name\Contracts\Renderer_Interface;
use Plugin_Name\Contracts\Service_Interface;

/**
 * Class Shortcode.
 *
 * Main class for shortcodes services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Shortcode
 * @author  Your Name <email@example.com>
 */
abstract class Shortcode extends Service implements Renderer_Interface {
	/**
	 * Adds a shortcode inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_shortcode( $this->get_name(), [ $this, 'handle' ] );
	}

	/**
	 * Handles shortcode registration and rendering.
	 *
	 * @param  array $atts
	 * @param  string $content
	 * @return string
	 */
	public function handle( array $atts, $content ) {
		$attributes = $this->get_attrs( $atts );
		$context    = $this->get_context( $attributes );

		ob_start();

		$this->render( compact( 'attributes', 'context', 'content' ) );

		return ob_get_clean();
	}

	/**
	 * Gets the shortcode attributes values extended by defaults.
	 *
	 * @param array $atts Attributes values passed in shortcode.
	 * @return array
	 */
	public function get_attrs( array $atts ) {
		return shortcode_atts( $atts, $this->get_defaults(), $this->get_name() );
	}

	/**
	 * Gets the default name for the shortcode.
	 *
	 * @return array
	 */
	public function get_defaults() {
		return [];
	}

	/**
	 * Gets the context data for the shortcode.
	 *
	 * @param array $atts Attributes values passed in shortcode.
	 * @return array
	 */
	public function get_context( array $atts ) {
		return [];
	}
}
