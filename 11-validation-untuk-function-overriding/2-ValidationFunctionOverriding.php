<?php

class ParentClass # Validation di Function Overriding.
{
    public function method(array $array): void
    {
        # Kode.
    }
}

class ChildClass extends ParentClass # Validation di Function Overriding.
{
    public function method(int $array): void # ERROR.
    {
        # Kode Error Sejak PHP 8.
    }
}
