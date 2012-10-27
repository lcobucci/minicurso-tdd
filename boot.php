<?php
set_include_path(
    get_include_path() . PATH_SEPARATOR
    . __DIR__ . '/src'
);

spl_autoload_register(
    function ($className)
    {
        $className = ltrim($className, '\\');
        $filename = strtr($className, '\\', DIRECTORY_SEPARATOR) . '.php';

        if (stream_resolve_include_path($filename)) {
            include $filename;

            return true;
        }
    }
);