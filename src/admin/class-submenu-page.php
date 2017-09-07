<?php

namespace Plugin_Name\Admin;

use Plugin_Name\Contracts\Service_Interface;
use Plugin_Name\Contracts\Renderer_Interface;

abstract class Submenu_Page implements Service_Interface, Renderer_Interface {
	/**
	 * Adds submenu page inside WordPress's admin panel.
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
