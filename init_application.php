<?php

chdir(__DIR__);

// Define application environment (production|staging|testing|development)
defined('APPLICATION_ENV') || define('APPLICATION_ENV', ((getenv('APP_ENV')) ? getenv('APP_ENV') : 'development'));

// Init the application.
return Zend\Mvc\Application::init(
    require('config/application.config.php')
);
