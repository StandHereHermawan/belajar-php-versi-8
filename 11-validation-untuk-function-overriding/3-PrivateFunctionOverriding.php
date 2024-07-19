<?php

class Employee
{
    private function sayHello(): void
    {
        echo "Hello! from class Employee." . PHP_EOL;
    }
}

class Manager extends Employee
{
    public function sayHello(string $name): string
    {
        return "Hello $name! from class Manager" . PHP_EOL;
    }
}
