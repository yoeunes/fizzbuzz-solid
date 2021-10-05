<?php

declare(strict_types=1);

namespace App\Rule;

class Buzz implements RuleInterface
{
    public function canBeUsed(int $number): bool
    {
        return 0 === $number % 5;
    }

    public function print(int $number): string
    {
        return 'Buzz';
    }
}
