<?php

namespace Plugin_Name\Admin;

use Plugin_Name\Contracts\Service;
use Plugin_Name\Contracts\Renderer;

abstract class Submenu_Page implements Service, Renderer {
	public function __construct() {
	}

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
