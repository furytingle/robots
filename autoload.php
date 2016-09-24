<?php

spl_autoload_register(function ($className) {
    $class = str_replace('\\', '/', $className) . '.php';
    require_once($class);
});
