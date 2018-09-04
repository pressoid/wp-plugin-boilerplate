<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Widget;

use WP_Widget;
use Plugin_Name\Foundation\Contract\Service;

/**
 * Class Widget.
 *
 * Main class for widget services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Widget
 * @author  Your Name <email@example.com>
 */
abstract class Widget extends WP_Widget implements Service {
	/**
	 * Adds a widget inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		register_widget( $this );
	}
}
