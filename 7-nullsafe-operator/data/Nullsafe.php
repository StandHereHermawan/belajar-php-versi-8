<?php

class Address
{
    public ?string $city;
}

class User
{
    public ?Address $address;
}

function getCityManualCheck(?User $user): ?string # Manual Null Check.
{
    if ($user != null) {
        if ($user->address != null) {
            return $user->address->city;
        }
    }
    return null;
}

function getCityNullsafeOpt(?User $user): ?string # Nullsafe operator.
{
    return $user?->address->city;
}
