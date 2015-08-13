<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

define('REQUEST_MICROTIME', microtime(true));

require('init_autoloader.php');

$application = require('init_application.php');
$application->run();
