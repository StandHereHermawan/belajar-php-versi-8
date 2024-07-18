<?php

function sampleFunctionCheckStringOrArray(string|array $data): void # Union Type di Argument atau parameter.
{
    if (is_string($data)) {
        # code...
        echo "Argument is String." . PHP_EOL;
    } else if (is_array($data)) {
        # code...
        echo "Argument is Array." . PHP_EOL;
    }
}

function sampleFunctionReturnResponse(string|array $data): string|array # Union Type di Return Value.
{
    if (is_string($data)) {
        # code...
        return "Response in String with data: $data";
    } else if (is_array($data)) {
        # code...
        return ["Response in Array", $data];
    } else {
        return $data;
    }
}
