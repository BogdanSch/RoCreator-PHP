<?php

class Router
{
    private array $handlers;
    public function get($path, $handler)
    {
        $this->handlers['GET' . $path] = [
            'path' => $path,
            'method' => 'GET',
            'handler' => $handler,
        ];
    }
    public function post($path, $handler){
        
    }
    
}