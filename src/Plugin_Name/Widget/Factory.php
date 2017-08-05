<?php

namespace Plugin_Name\Widget;

class Factory
{
    public $widgets;

    public function __construct(array $widgets)
    {
        $this->widgets = $widgets;
    }

    public function register()
    {
        foreach (apply_filters('plugin_name/widget/factory/widgets', $this->widgets) as $widget) {
            $this->make($widget);
        }
    }

    public function make($widget)
    {
        register_widget($widget);
    }
}
