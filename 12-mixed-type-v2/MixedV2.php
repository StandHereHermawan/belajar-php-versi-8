<?php

function testMixed(mixed $parameter): mixed
{
    if (is_array($parameter)) {
        return [];
    } else if (is_string($parameter)) {
        return "Terry.";
    } else if (is_numeric($parameter)) {
        return 100;
    } else {
        return null;
    }
}

$array = [];
$arrayReturn = testMixed($array);
var_dump($arrayReturn);

$string = "";
$stringReturn = testMixed($string);
var_dump($stringReturn);

$numeric = 20;
$numericReturn = testMixed($numeric);
var_dump($numericReturn);

$float = 7.0;
$floatReturn = testMixed($float);
var_dump($floatReturn);

$function = fn () => "Hello!" . PHP_EOL;
$functionReturn = testMixed($function);
var_dump($functionReturn);

$class = new class
{
};
$classReturn = testMixed($class);
var_dump($classReturn);
