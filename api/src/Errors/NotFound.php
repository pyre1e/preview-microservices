<?php

namespace App\Errors;

use Slim\Psr7\Response;

class NotFound
{
    public function __invoke(\Psr\Http\Message\ServerRequestInterface $request): string
    {
        return (new Response(404));
    }
}