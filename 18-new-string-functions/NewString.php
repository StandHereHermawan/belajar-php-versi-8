<?php

var_dump(str_contains("Terry Andrew Davis", "Andrew"));
var_dump(str_contains("Terry Andrew Davis", "Davis"));
var_dump(str_contains("Terry Andrew Davis", "w D"));

var_dump(str_starts_with("Terry Andrew Davis", "Terry"));
var_dump(str_starts_with("Terry Andrew Davis", "Davis"));

var_dump(str_ends_with("Terry Andrew Davis", "Davis"));
var_dump(str_ends_with("Terry Andrew Davis", "Andrew"));
