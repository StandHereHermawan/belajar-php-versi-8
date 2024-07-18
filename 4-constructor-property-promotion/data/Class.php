<?php

class Product # Property dan Constructor.
{
    private string $id;
    private string $name;
    private int $quantity;
    private int $price;

    public function __construct(string $id, string $name, int $quantity, int $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }
}

class Smartphone
{
    public function __construct(
        private string $id,
        private string $name,
        private string $brand,
        private int $quantity = 0,
        private int $price = 0,
        private bool $available = false
    ) # Constructor Property Promotion. 
    {
        # Kode Kosong
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }
}
