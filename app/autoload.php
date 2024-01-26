<?php
spl_autoload_register(
    static function ($class) {
        $dirs = array(
            __DIR__,
            __DIR__ . '/controller',
            __DIR__ . '/class',
            __DIR__ . '/helper',
            __DIR__ . '/interfaces',
            __DIR__ . '/model',
        );

        $part = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

        foreach ($dirs as $dir) {
            $dir = str_replace('/', DIRECTORY_SEPARATOR, $dir);
            $file = $dir . DIRECTORY_SEPARATOR . $part;

            if (is_readable($file)) {

                require $file;
                return;
            }
        }
    }
);