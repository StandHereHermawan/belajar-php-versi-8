<?php

$value = "A";

$result = match ($value) { # Match Expression.
    "A", "AB", "B", "BC", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Sepertinya anda salah jurusan.",
    default => "Nilai Macam Apa itu?"
};

echo $result . PHP_EOL;

$markExam = 81;

$result = match (true) { # Match Expression Non Equals.
    $markExam >= 81 => "A",
    $markExam >= 71 => "AB",
    $markExam >= 61 => "B",
    $markExam >= 51 => "BC",
    $markExam >= 41 => "C",
    default => "E"
};

echo $result . PHP_EOL;

$name = "Mr. Terry";

$result = match (true) { # Match Expression dengan Kondisi.
    str_contains($name, "Mr.") => "Hello Sir.",
    str_contains($name, "Mrs.") => "Hello Sir.",
    default => "Hello"
};

echo $result . PHP_EOL;

function matchExpressionKomentarIPK($value): string
{
    $result = match ($value) {
        "A", "AB", "B", "BC", "C" => "Anda Lulus",
        "D" => "Anda Tidak Lulus",
        "E" => "Sepertinya anda salah jurusan.",
        default => "Nilai Macam Apa itu?"
    };

    return $result;
}

function matchExpressionNilaiAlphabet($markExam): string
{
    $result = match (true) { # Match Expression Non Equals.
        $markExam >= 81 => "A",
        $markExam >= 71 => "AB",
        $markExam >= 61 => "B",
        $markExam >= 51 => "BC",
        $markExam >= 41 => "C",
        default => "E"
    };
    return $result;
}

function matchExpressionSayHello($name): string
{
    $result = match (true) { # Match Expression dengan Kondisi.
        str_contains($name, "Mr.") => "Hello Sir.",
        str_contains($name, "Mrs.") => "Hello Ma'am.",
        default => "Hello"
    };

    return $result;
}
