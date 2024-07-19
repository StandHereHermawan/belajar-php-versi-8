<?php

function validate(string $value): void
{
    if (trim($value) === "") {
        throw new Exception("Invalid Name.");
    }
}

function sayHello(string $name): void
{
    try {
        validate($name);
        echo "Hello $name." . PHP_EOL;
    } catch (Exception) {
        echo "Invalid Name. Name is Blank." . PHP_EOL; # Non-Capturing Catches.
    }
}

sayHello("");
sayHello("Arief");
