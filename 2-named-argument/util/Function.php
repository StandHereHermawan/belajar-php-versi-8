<?php

function sayHello(string $firstName, string $middleName, string $lastName)
{
    echo "Hello Mr.$firstName $middleName $lastName!" . PHP_EOL . "Welcome Back." . PHP_EOL;
}

function sayHelloDefaultValue(string $firstName, string $middleName = "", string $lastName)
{
    echo "Hello Mr.$firstName $middleName $lastName!" . PHP_EOL . "Welcome Back." . PHP_EOL;
}
