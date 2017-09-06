<?php

namespace Plugin_Name;

use Plugin_Name\Contracts\Registrar;
use Plugin_Name\Contracts\Service_Provider;

final class Plugin implements Registrar {

	const NAME = 'plugin_name';

	public $settings;

	/**
	 * [$widgets description]
	 *
	 * @var [type]
	 */
	public $widgets;

	public function __construct(
		Service_Provider $pages,
		Service_Provider $widgets
	) {
		$this->pages = $pages;
		$this->widgets = $widgets;
	}

	public function register() {
		add_action( 'admin_menu', [ $this->settings, 'register' ] );
		add_action( 'widgets_init', [ $this->widgets, 'register' ] );
	}

	public static function activate() {
		// Login when plugin is activated
	}

	public static function deactivate() {
		// Logic when plugin is deactivated
	}

	public static function uninstall() {
		// Logic when plugin is uninstalled
	}
}
