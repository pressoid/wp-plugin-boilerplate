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

use WP_Widget;
use Plugin_Name\Contracts\Service_Interface;

abstract class Widget extends WP_Widget implements Service_Interface {
	/**
	 * Adds a widget inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		register_widget( $this );
	}
}
