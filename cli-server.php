<?php

if (PHP_SAPI == 'cli-server') {
    if (call_user_func(function() {
        $f = $_SERVER['SCRIPT_FILENAME'];
        // return if requested file exists
        if ($f != __FILE__ && file_exists($f) ) {
            return true;
        }
        $_SERVER['SCRIPT_NAME'] = "/".basename(__FILE__); // fix SCRIPT_NAME that change when REQUEST_URI contains dot
    })) return false;
}

require_once 'index.php';
