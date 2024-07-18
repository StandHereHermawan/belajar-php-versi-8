<?php

require_once __DIR__ . "/../attributes/Length.php";
require_once __DIR__ . "/../attributes/NotBlank.php";

class LoginRequest
{
    #[Length(min: 7, max: 31)] # Menggunakan Attribute Class.
    #[NotBlank] # Menggunakan Attributes di property.
    private ?string $username;

    #[NotBlank] # Menggunakan Attributes di property.
    #[Length(min: 7, max: 31)] # Menggunakan Attribute Class.
    private ?string $password;

    public function __construct()
    {
        # Konstruktor kosong.
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function unsetUsername(): void
    {
        unset($this->username);
    }

    public function unsetPassword(): void
    {
        unset($this->password);
    }
}
