<?php

function sayHello(Stringable $stringable) # Function Argument Stringable.
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class Person
{
    public function __tostring(): string # Override toString Function.
    {
        return "Person";
    }
}

sayHello(new Person());
