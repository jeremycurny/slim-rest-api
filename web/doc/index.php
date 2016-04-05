<?php
require __DIR__ . '/../../bootstrap.php';

$swagger = \Swagger\Scan([SRC, WEB]);
header('Content-Type: application/json');
echo $swagger;
