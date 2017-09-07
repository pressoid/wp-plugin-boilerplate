<?php

namespace Plugin_Name\Admin;

use WP_Widget;
use Plugin_Name\Contracts\Service_Interface;

abstract class Widget extends WP_Widget implements Service_Interface {
	/**
	 * Register widget instance inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		register_widget( $this );
	}
}
