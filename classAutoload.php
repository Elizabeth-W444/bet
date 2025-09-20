<?php

require_once 'cpnf.php';

$directory = [
    'Layouts',
    'Forms'
];

spl_autoload_register(function($className)  use  ($directory) {
    foreach ($directory as $dir) { 
        $filepath = _DIR_. '/' . $dir . '/' . $className . '.php';
        if (file_exists($filepath)) {
            require_once $filepath;
            return;
        }
    }
});

// create various instances to test autoloading 
$layoutInstance = new layouts();
$formsInstance = new forms();