<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Ajax;

use Plugin_Name\Foundation\Service;
use Plugin_Name\Contracts\Renderer_Interface;
/**
 * Class Ajax.
 *
 * Main class for ajaxes services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Ajax
 * @author  Your Name <email@example.com>
 */
abstract class Ajax extends Service implements Renderer_Interface {
	/**
	 * Adds an ajax inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'wp_ajax_' . $this->get_name(), [ $this, 'handle' ] );
		add_action( 'wp_ajax_nopriv_' . $this->get_name(), [ $this, 'handle' ] );
	}

	/**
	 * Handles ajax actions logic and renders a response.
	 *
	 * @throws \RuntimeException
	 * @return string
	 */
	public function handle() {
		if ( wp_verify_nonce( $this->get_nonce(), $this->get_name() ) ) {
			wp_send_json( $this->render( $_GET ) );

			return;
		}

		wp_send_json_error();
	}

	/**
	 * Gets the tag name for the ajax.
	 *
	 * @throws \RuntimeException
	 * @return string
	 */
	public function get_nonce() {
		return $_REQUEST['_ajax_nonce'];
	}
}
