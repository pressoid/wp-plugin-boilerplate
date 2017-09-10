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
 * Class Menu Page.
 *
 * Main class for menu page services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Menu_Page extends Page implements Service_Interface, Renderer_Interface {
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
			Plugin::NAME,
			[ $this, 'render' ]
		);
	}
}
