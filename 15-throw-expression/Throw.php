<?php

$name = "Terry";

function validate(?string $name)
{
    $result = $name ?? throw new Exception("Data is null. Data tidak boleh null.");
    return $result;
}

function talk(?string $name)
{
    validate($name);
    $result = $name == "Terry" ? "$name, absolute Racist." : throw new Exception("$name, Anda Kurang Rasis.");
    return $result;
}

function racistCheck(?string $name)
{
    try {
        //code...
        echo talk($name) . PHP_EOL;
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL . $e->getTraceAsString() . PHP_EOL;
    }
}

racistCheck("Arief");
racistCheck("Terry");
$name = null;
racistCheck($name);