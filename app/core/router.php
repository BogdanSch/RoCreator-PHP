<?php

class Router
{
    private array $handlers;
    private const METHOD_GET = "GET";
    private const METHOD_POST = "POST";
    public function get($path, $handler)
    {
        $this->addHandler(self::METHOD_GET, $path, $handler);
    }
    public function post($path, $handler)
    {
        $this->addHandler(self::METHOD_POST, $path, $handler);
    }
    private function addHandler(string $method, string $path, $handler)
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }
    public function addPage404Handler($handler)
    {
        $this->handlers["404"] = [
            'handler' => $handler,
            'path' => '404',
        ];
    }
    public function run()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = str_replace('/RoCreator-PHP/','/', $requestUri['path']);
        $method = $_SERVER["REQUEST_METHOD"];

        $callbackHandler = null; 
        foreach ($this->handlers as $handler) {
            if($handler["path"] === $requestPath && $handler["method"] === $method){
                $callbackHandler = $handler["handler"];
            }
        }
        if(!isset($callbackHandler)){
            $callbackHandler = $this->handlers["404"]["handler"];
        }
        call_user_func_array($callbackHandler, [array_merge($_GET, $_POST)]);
    }
}