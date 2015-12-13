<?php

spl_autoload_register(function ($class) {
    if (stripos($class, 'Frye\YunTongXun') === 0) {
        require_once __DIR__.'/src/'.str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 8)).'.php';
    }
});