<?php

require_once __DIR__ . "/data/Class.php";
require_once __DIR__ . "/util/Util.php";

$example = new Example();
$example->data = "Terry";
var_dump($example);
$example->data = true;
var_dump($example);
$example->data = 100;
var_dump($example);
$example->data = ["Terry", "Andrew"];
var_dump($example);

sampleFunctionCheckStringOrArray("Arief");
sampleFunctionCheckStringOrArray(["Arief"]);

$array = sampleFunctionReturnResponse(["Arief"]);
var_dump($array);

$string = sampleFunctionReturnResponse("String");
var_dump($string);
