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
 * Class Menu Page.
 *
 * Main class for menu page services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Menu_Page extends Page {
	/**
	 * Adds a menu page inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		add_menu_page(
			$this->get_title(),
			$this->get_menu_title(),
			$this->get_capability(),
			$this->get_slug(),
			[ $this, 'render' ],
			$this->get_icon(),
			$this->get_position()
		);
	}

	/**
	 * Gets icon for the menu.
	 *
	 * @return string
	 */
	public function get_icon()
	{
		return 'dashicons-admin-generic';
	}

	/**
	 * Gets position number.
	 *
	 * @return null|integer
	 */
	public function get_position()
	{
		return;
	}
}
