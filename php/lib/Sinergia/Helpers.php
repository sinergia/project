<?php

namespace Sinergia;

class Helpers
{
    public static function h($s)
    {
        return htmlspecialchars((string)$s);
    }

    /**
     * @param $__FILE__
     * @param array $__VARS__
     * @return string
     */
    public static function render($__FILE__, $__VARS__ = array())
    {
        // convert SplFile to string
        $__FILE__ = (string)$__FILE__;

        // add .php extensions when missing
        if ( pathinfo($__FILE__, PATHINFO_EXTENSION) != 'php') {
            $__FILE__ .= ".php";
        }

        $render = new Render();
        $return = $render(function() use ($__FILE__, $__VARS__) {
            extract((array)$__VARS__);
            include $__FILE__;
        });

        return (string)$return;
    }
}
