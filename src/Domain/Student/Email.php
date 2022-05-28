<?php

declare(strict_types=1);

namespace Alura\Calisthenics\Domain\Student;

use Stringable;

class Email implements Stringable
{
    public readonly string $email;

    public function __construct(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException('Invalid e-mail address');
        }
        $this->email = $email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}
