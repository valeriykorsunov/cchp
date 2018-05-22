<?php

class PHPDebug {

    static  function log ($var, $label = 'PHPDebug log: ')
    {
        $str = json_encode(print_r ($var, true));
	    echo "<script>console.group('".$label."');console.log('".$str."');console.groupEnd();</script>";
    }

    static function dump($var)
    {
        echo '<pre>';
            var_dump($var);
        echo '</pre>';
    }
}