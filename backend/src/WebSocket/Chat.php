<?php
namespace src\WebSocket;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface
{
    public function onOpen(ConnectionInterface $conn)
    {
        // Logique à exécuter lorsqu'une nouvelle connexion est établie
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        // Logique à exécuter lorsqu'un message est reçu
    }

    public function onClose(ConnectionInterface $conn)
    {
        // Logique à exécuter lorsqu'une connexion est fermée
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        // Logique à exécuter en cas d'erreur
    }
}