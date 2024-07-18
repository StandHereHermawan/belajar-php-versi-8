<?php

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER | Attribute::TARGET_CLASS)] # Attribute Target.
class Length # Attribute Class
{
    private int $min;
    private int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function setMin(int $min): void
    {
        $this->min = $min;
    }

    public function setMax(int $max): void
    {
        $this->max = $max;
    }
}
