<?php

require_once __DIR__ . "/data/Trait.php";

class SampleTraitImpl # Validation di Abstract Function Trait.
{
    use SampleTrait;

    public function sampleFunction(int $name): int # ERROR.
    {
        # Kode Error Sejak PHP 8.
    }
}
