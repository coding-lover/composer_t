<?php

require __DIR__.'/src/functions_include.php';

spl_autoload_register(function ($class) {

    $prefix = 'Wmc\Composer_t\\';
    if (0 !== strpos($class, $prefix)) {
        return;
    }

    $file = __DIR__.'/src/'.str_replace('\\', '/', substr($class, strlen($prefix))).'.php';
    if (!is_readable($file)) {
        return;
    }

    require $file;
});
