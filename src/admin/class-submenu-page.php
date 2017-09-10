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

use Plugin_Name\Plugin;

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
abstract class Submenu_Page extends Page {
	/**
	 * Adds a submenu page inside a WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_submenu_page(
			$this->get_parent(),
			$this->get_title(),
			$this->get_menu_title(),
			$this->get_capability(),
			$this->get_slug(),
			[ $this, 'render' ]
		);
	}

	/**
	 * Gets name of the parent menu page.
	 *
	 * @return string
	 */
	public function get_parent()
	{
		return 'plugins.php';
	}
}
