<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Page;

use Plugin_Name\Contracts\Registrar_Interface;
use Plugin_Name\Contracts\Renderer_Interface;
use Plugin_Name\Contracts\Service_Interface;

/**
 * Class Page.
 *
 * Main class for page base classes to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Page
 * @author  Your Name <email@example.com>
 */
abstract class Page implements Service_Interface, Renderer_Interface {
	/**
	 * Gets title of the page.
	 *
	 * @return string
	 */
	abstract public function get_title();

	/**
	 * Gets slug of the menu page.
	 *
	 * @return string
	 */
	abstract public function get_name();

	/**
	 * Gets title of the page in a menu.
	 *
	 * @return string
	 */
	public function get_menu_title() {
		return $this->get_title();
	}

	/**
	 * Gets capability value required to access page.
	 *
	 * @return string
	 */
	public function get_capability() {
		return 'manage_options';
	}
}
