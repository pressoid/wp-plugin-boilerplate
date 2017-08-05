<?php

namespace Plugin_Name\Admin;

class Settings
{
    function __construct()
    {
        //
    }

    public function page()
    {
        add_submenu_page(
            'plugins.php',
            __('Plugin Name', 'plugin-name'),
            __('Plugin Name', 'plugin-name'),
            'manage_options',
            'plugin-name',
            [$this, 'render']
        );
    }

    public function render()
    {
    ?>
        <div class="wrap">
            <h2><?php echo __('Plugin Name', 'plugin-name') ?></h2>

            <?php settings_errors(); ?>

            <!-- Settings inputs goes here. -->
        </div>
    <?php
    }
}
