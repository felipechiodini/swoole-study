<?php

declare(strict_types=1);

use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;

$http = new Server('0.0.0.0', 9501);

$http->on(
    'start',
    function (Server $http) {
        echo "Swoole HTTP server is started.\n";
    }
);
$http->on(
    'request',
    function (Request $request, Response $response) {
        $container_name = gethostname();

        $response->header("Content-Type", "text/plain");
        $response->end("Hello from Swoole! You are being served by: $container_name\n");
    }
);

$http->start();