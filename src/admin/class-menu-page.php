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
use Plugin_Name\Contracts\Renderer_Interface;

abstract class Menu_Page implements Service_Interface, Renderer_Interface {
	/**
	 * Adds a menu page inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_menu_page(
			__( 'Unsub List', 'textdomain' ),
			__( 'Unsub Emails','textdomain' ),
			'manage_options',
			'plugin-name',
			[ $this, 'render' ]
		);
	}
}
