<?php

namespace Demo_Theme_THEME\Inc\Traits;

trait singleton
{
    protected function __construct() {}

    private function __clone() {}

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    final public static function get_instance()
    {
        static $instance = [];

        $called_class = get_called_class();

        if (! isset($instance[$called_class])) {
            $instance[$called_class] = new $called_class();

            do_action(sprintf('Demo_theme_%s_init', $called_class));
        }
        return $instance[$called_class];
    }
}
