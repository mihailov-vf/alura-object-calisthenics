<?php

declare(strict_types=1);

namespace Alura\Calisthenics\Domain\Student;

class Address
{
    public readonly string $street;
    public readonly string $number;
    public readonly string $province;
    public readonly string $city;
    public readonly string $state;
    public readonly string $country;

    public function __construct(
        string $street,
        string $number,
        string $province,
        string $city,
        string $state,
        string $country
    ) {
        $this->street = $street;
        $this->number = $number;
        $this->province = $province;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }
}
