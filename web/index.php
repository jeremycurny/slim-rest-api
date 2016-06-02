<?php
// Bootstrap
require __DIR__ . '/../bootstrap.php';

/**
 * @SWG\Info(title="Slim Rest API", version="1.0")
 */

// Routes
$app->get('/users', 'UserController:find');
$app->get('/users/{id}', 'UserController:findById');
$app->post('/users', 'UserController:create');
$app->put('/users/{id}', 'UserController:updateById');
$app->delete('/users/{id}', 'UserController:deleteById');

// Run
$app->run();
