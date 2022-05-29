<?php

declare(strict_types=1);

namespace Alura\Calisthenics\Domain\Student;

use Stringable;

class FullName implements Stringable
{
    public readonly string $firstName;
    public readonly string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
