<?php

$value = "A";
$result = "";

switch ($value) { # Switch Statement
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus.";
        break;
    case "D":
        $result = "Anda Tidak Lulus";
        break;
    case "E":
        $result = "Mungkin Anda Salah Jurusan";
        break;
    default:
        $result = "Nilai Macam Apa itu?";
}

echo $result . PHP_EOL;

function switchCaseKomentarIPK($value): string
{
    $result = "";
    switch ($value) { # Switch Statement
        case "A":
        case "B":
        case "C":
            $result = "Anda Lulus.";
            return $result;
        case "D":
            $result = "Anda Tidak Lulus";
            return $result;
        case "E":
            $result = "Mungkin Anda Salah Jurusan";
            return $result;
        default:
            $result = "Nilai Macam Apa itu?";
            return $result;
    }
}
