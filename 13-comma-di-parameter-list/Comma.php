<?php

function sayHello(string $firstName, string $lastName): void
{
    echo "Hello $firstName $lastName!" . PHP_EOL;
}

sayHello(lastName: "Hermawan", firstName: "Arief",); # Comma di Argument.

$hobby = [
    "first" => "Menonton Youtube",
    "second" => "Bermain Clash of Clans",
    "third" => "Bermain Criminal Case",
    "fourth" => "Bermain Megapolis", # Comma di Array.
];

var_dump($hobby);
