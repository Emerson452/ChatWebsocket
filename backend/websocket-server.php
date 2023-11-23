<?php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\WebSocket\Chat;

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat() // Remplacez "Your\Namespace\WebSocket\Chat" par le chemin de votre classe WebSocket
        )
    ),
    8080 // Port sur lequel le serveur WebSocket écoutera
);

echo "WebSocket server running...\n";

$server->run();
