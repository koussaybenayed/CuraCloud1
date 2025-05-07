<?php
// src/Service/WebSocketClient.php

namespace App\Service;

use WebSocket\Client;

class WebSocketClient
{
    private $client;

    public function connect(string $url)
    {
        // Debug message
        echo "Attempting to connect to WebSocket server at: $url\n";
    
        // Create a WebSocket client instance
        $this->client = new Client($url);
    
        // No explicit connect method is needed with textalk/websocket
        // The connection is established when creating the client instance
    
        // Debug message
        echo "WebSocket connection established successfully\n";
    }
    

    public function send(string $message)
    {
        // Send a message to the WebSocket server
        $this->client->send($message);
    }

    public function receive()
    {
        // Receive a message from the WebSocket server
        return $this->client->receive();
    }

    public function disconnect()
    {
        // Disconnect from the WebSocket server
        $this->client->close();
    }
}

