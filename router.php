<?php

class Router {

    public $fullUrl;
    public $uri;
    public $current = 'home';
    public $pageName = 'home';
    public $params = [];

    function __construct() {
        $url = "";

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
        else  
            $url = "http://";   
            
        $url .= $_SERVER['HTTP_HOST'];   
        
        $this->uri = $_SERVER['REQUEST_URI'];
        $url .= $this->uri;
            
        $this->fullUrl = $url;

        if($this->uri === '/') {
            $this->current = 'home.php';
            $this->pageName = 'home';
        }

        else {
            $parts = explode('/', $this->uri);
            array_shift($parts);
            $page = array_shift($parts);

            $this->pageName = $page;
            $this->current = $page . '.php';
            $this->params = $parts;
        }
    }

    function page() {
        include('./pages/' . $this->current);
    }
}

$router = new Router();