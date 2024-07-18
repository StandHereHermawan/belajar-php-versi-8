<?php

require_once __DIR__ . "/data/Class.php";

$product = new Product(id: "1", name: "Burger Bangor Juragan", quantity: 30, price: 23599);
var_dump($product);

$smartphone = new Smartphone(id: "1", name: "Iphone 15", brand: "Apple", quantity: 10, price: 15_999_000);
var_dump($smartphone);
