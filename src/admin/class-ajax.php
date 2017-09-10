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
 * Class Ajax.
 *
 * Main class for ajaxes services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Ajax implements Service_Interface, Renderer_Interface {
	/**
	 * Adds an ajax inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'wp_ajax_' . $this->get_tag(), [ $this, 'handle' ] );
		add_action( 'wp_ajax_nopriv_' . $this->get_tag(), [ $this, 'handle' ] );
	}

	/**
	 * Handles ajax actions logic and renders a response.
	 *
	 * @throws \RuntimeException
	 * @return string
	 */
	public function handle() {
		echo $this->render( $_GET );

		die();
	}

	/**
	 * Gets the tag name for the ajax.
	 *
	 * @throws \RuntimeException
	 * @return string
	 */
	public function get_tag() {
		throw new RuntimeException( 'Ajax does not implement `get_tag()` method.' );
	}
}
