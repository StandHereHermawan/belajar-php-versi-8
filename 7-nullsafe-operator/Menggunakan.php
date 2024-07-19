<?php

require_once __DIR__ . "/data/Nullsafe.php";

echo getCityManualCheck(null) . PHP_EOL;
echo getCityNullsafeOpt(null) . PHP_EOL;
