<?php

$pages = new Plugin_Name\Providers\Pages_Service_Provider([
    Plugin_Name\Admin\Pages\Settings::class
]);

$widgets = new Plugin_Name\Providers\Widgets_Service_Provider([
    Plugin_Name\Widget\Example_Widget::class
]);

return new Plugin_Name\Plugin($pages, $widgets);
