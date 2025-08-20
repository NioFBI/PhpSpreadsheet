<?php

/**
 * Bootstrap for PhpSpreadsheet classes.
 */
// Try to find an autoloader.

$paths = [
    __DIR__ . '/../vendor/autoload.php', // In case PhpSpreadsheet is cloned directly with composer
    __DIR__ . '/../autoload.php', // When used without composer
    __DIR__ . '/../../../autoload.php', // In case PhpSpreadsheet is a composer dependency.
];

foreach ($paths as $path) {
    if (file_exists($path)) {
        require_once $path;

        return;
    }
}

throw new Exception('Autoloader could not be found. Install dependencies with `composer install` or include `autoload.php` and try again.');
