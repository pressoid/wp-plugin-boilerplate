<?php

namespace Plugin_Name\Foundation\Admin;

use Plugin_Name\Contracts\Service;
use Plugin_Name\Contracts\Renderer;

abstract class Submenu_Page implements Service, Renderer {

	public function __construct() {
	}

	public function register() {
		add_menu_page(
			__( 'Unsub List', 'textdomain' ),
			__( 'Unsub Emails','textdomain' ),
			'manage_options',
			'plugin-name',
			[ $this, 'render' ]
		);
	}
}
