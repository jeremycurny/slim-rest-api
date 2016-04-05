<?php
use \Slim\App;
use \Slim\Container;

// Bootstrap
require __DIR__ . '/../bootstrap.php';

// Slim instance
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new Container($configuration);
$app = new App($c);

/**
 * @SWG\Info(title="Slim Rest API", version="1.0")
 */

// Routes
$app->get('/users', 'Controller\UserController::find');
$app->get('/users/{id}', 'Controller\UserController::findById');
$app->post('/users', 'Controller\UserController::create');
$app->put('/users/{id}', 'Controller\UserController::updateById');
$app->delete('/users/{id}', 'Controller\UserController::deleteById');

// Run
$app->run();
