<?php

use Slim\Exception\HttpNotFoundException;
use App\Errors;

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$errorMiddleware->setErrorHandler(HttpNotFoundException::class, Errors\NotFound::class);
