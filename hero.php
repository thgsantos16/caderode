<?php

class Hero {

    public $h1;
    public $h2;

    function __construct($router) {
        $routes = [
            "produtos" => [
                "h1" => "",
                "h2" => "",
            ],
            "a-caderode" => [
                "h1" => "Somos inquietos",
                "h2" => "Quem somos?",
            ],
            "onde-comprar" => [
                "h1" => "Onde comprar",
                "h2" => "encontre a caderode mais próxima de você",
            ],
            "cases" => [
                "h1" => "Cases",
                "h2" => "Conheça alguns de nossos",
            ],
            "blog" => [
                "h1" => "",
                "h2" => "",
            ],
            "locacao" => [
                "h1" => "",
                "h2" => "",
            ],
            "loja-online" => [
                "h1" => "",
                "h2" => "",
            ],
            "contato" => [
                "h1" => "",
                "h2" => "",
            ],
            "trabalhe-conosco" => [
                "h1" => "Trabalhe conosco",
                "h2" => "quer fazer parte deste time?",
            ]
        ];

        $this->h1 = $routes[$router->pageName]["h1"];
        $this->h2 = $routes[$router->pageName]["h2"];
    }
}

$hero = new Hero($router);