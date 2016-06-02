<?php
use Slim\App;
use Slim\Container;

// Composer autoload
require __DIR__ . '/vendor/autoload.php';

// Folder structure
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('SRC', ROOT . 'src' . DIRECTORY_SEPARATOR);
define('WEB', ROOT . 'web' . DIRECTORY_SEPARATOR);

// Slim instance
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$c = new Container($configuration);

$c['UserController'] = function($c) {
	return new Controller\UserController($c);
};

$app = new App($c);
