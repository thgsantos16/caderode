<?php

class Store {

    public $city;
    public $state;
    public $country;
    public $address;
    public $number;
    public $comp;
    public $neighborhood;
    public $zip;
    public $routes;
    public $instagram;
    public $whatsapp;
    public $phone;
    public $email;
    public $image;
    public $name;

    function __construct($store) {
        $this->name           = $store['name'];
        $this->city           = $store['city'];
        $this->state          = $store['state'];
        $this->country        = $store['country'];
        $this->address        = $store['address'];
        $this->number         = $store['number'];
        $this->comp           = $store['comp'];
        $this->neighborhood   = $store['neighborhood'];
        $this->zip            = $store['zip'];
        $this->routes         = $store['routes'];
        $this->instagram      = $store['instagram'];
        $this->whatsapp       = $store['whatsapp'];
        $this->phone          = $store['phone'];
        $this->email          = $store['email'];
        $this->image          = $store['image'];
    }
}

$stores = [];

for($i = 0; $i < 8; $i++) {
    $stores[] = new Store([
        "name" => "Flores da Cunha",
        "city" => "Flores da Cunha",
        "state" => "Rio Grande do Sul",
        "country" => "Brasil",
        "address" => "Borges de Medeiros",
        "number" => "1881",
        "comp" => "Loja 01",
        "neighborhood" => "Centro",
        "zip" => "95270-000",
        "routes" => "https://google.com",
        "instagram" => "caderodeserragaucha",
        "whatsapp" => "54991890819",
        "phone" => "5430276727",
        "email" => "serra@caderode.com.br",
        "image" => "https://via.placeholder.com/500x500.png?text=Placeholder"
    ]);
}