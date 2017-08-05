<?php

namespace Plugin_Name;

use Plugin_Name\Admin\Settings;
use Plugin_Name\Widget\Factory;

class Plugin
{
    public $settings;

    public $widgets;

    public function __construct(
        Settings $settings,
        Factory $widgets
    ) {
        $this->settings = $settings;
        $this->widgets = $widgets;
    }

    public function run()
    {
        add_action('admin_menu', [$this->settings, 'page']);
        add_action('widgets_init', [$this->widgets, 'register']);
    }

    public static function activate()
    {
        // Login when plugin is activated
    }

    public static function deactivate()
    {
        // Logic when plugin is deactivated
    }

    public static function uninstall()
    {
        // Logic when plugin is uninstalled
    }
}
