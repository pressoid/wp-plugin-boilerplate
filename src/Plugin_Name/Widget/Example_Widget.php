<?php

namespace Plugin_Name\Widget;

use WP_Widget;

class Example_Widget extends WP_Widget
{
    function __construct() {
        parent::__construct(
            'plugin-name-widget',
            __('Plugin Widget', 'plugin-name'),
            ['description' => __('Short description of the widget.', 'plugin-name')]
        );
    }

    function widget($arguments, $instance) {
        //
    }

    function form($instance) {
        //
    }

    function update($new_instance, $old_instance) {
        //
    }
}
