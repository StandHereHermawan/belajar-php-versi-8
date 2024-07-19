<?php

class Address
{
    public function __construct(
        private ?string $city
    )   # Nullable Class 
    {
        # Kode.
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function unsetCity(): void
    {
        unset($this->city);
    }
}

class User
{
    public function __construct(
        private ?string $name,
        private ?Address $address,
    )   # Nullable Class 
    {
        # Kode.
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    function getCity(?User $user): ?string # Nullsafe operator.
    {
        return $user?->getAddress()->getCity();
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function unsetName(): void
    {
        unset($this->name);
    }
}
