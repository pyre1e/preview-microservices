<?php

define("APP_ROOT", __DIR__ . "/../src");

require __DIR__ . '/../vendor/autoload.php';

$app = \Slim\Factory\AppFactory::create();

require APP_ROOT . '/middlewares.php';
require APP_ROOT . '/routes.php';

$app->run();
