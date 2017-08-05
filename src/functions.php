<?php

function plugin_name()
{
    static $plugin;

    if (null === $plugin) {
        $plugin = require_once dirname(__DIR__) . '/bootstrap/plugin.php';

        register_activation_hook(__FILE__, 'plugin_name_activate');
        register_deactivation_hook(__FILE__, 'plugin_name_deactivate');

        $plugin->run();
    }

    return $plugin;
}

function plugin_name_activate() {
    Plugin_Name\Plugin::activate();

    register_uninstall_hook(__FILE__, 'plugin_name_uninstall');
}

function plugin_name_deactivate() {
    Plugin_Name\Plugin::deactivate();
}

function plugin_name_uninstall() {
    Plugin_Name\Plugin::uninstall();
}
