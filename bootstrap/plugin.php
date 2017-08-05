<?php

$settings = new Plugin_Name\Admin\Settings;

$widgets = new Plugin_Name\Widget\Factory([
    Plugin_Name\Widget\Example_Widget::class
]);

return new Plugin_Name\Plugin($settings, $widgets);
