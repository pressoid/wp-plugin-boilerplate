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

/**
 * Class Submenu Page.
 *
 * Main class for submenu page services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Submenu_Page implements Service_Interface, Renderer_Interface {
	/**
	 * Adds a submenu page inside a WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_submenu_page(
			'plugins.php',
			__( 'Plugin Name', 'plugin-name' ),
			__( 'Plugin Name', 'plugin-name' ),
			'manage_options',
			'plugin-name',
			[ $this, 'render' ]
		);
	}
}
