<?php

namespace Plugin_Name\Admin;

use Plugin_Name\Contracts\Service_Interface;
use Plugin_Name\Contracts\Renderer_Interface;

abstract class Menu_Page implements Service_Interface, Renderer_Interface {
	/**
	 * Adds menu page inside WordPress's admin panel.
	 *
	 * @return void
	 */
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
