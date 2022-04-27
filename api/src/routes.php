<?php

use Slim\Routing\RouteCollectorProxy;
use App\Handlers;

$app->group("/preview", function(RouteCollectorProxy $group) 
{
    $group->post("/", Handlers\Request::class);
});
