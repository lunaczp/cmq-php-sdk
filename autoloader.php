<?php
define('CMQAPI_ROOT_PATH', dirname(__FILE__));

spl_autoload_register(function ($class_name) {
    $clsName = str_replace("\\",DIRECTORY_SEPARATOR, $class_name);
    if (is_file(__DIR__.DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR.$clsName . '.php')) {
        require_once(__DIR__.DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR.$clsName.'.php');
    }
});
