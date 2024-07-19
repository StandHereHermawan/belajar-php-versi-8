<?php

try {
    strlen([]);
} catch (\Throwable $th) {
    echo $th->getMessage() . PHP_EOL . $th->getTrace() . PHP_EOL;
}

strlen([]);

echo "Program Selesai." . PHP_EOL;
