<?php

declare(strict_types=1);

namespace App\Rule;

class FizzBuzz implements RuleInterface
{
    public function canBeUsed(int $number): bool
    {
        return 0 === $number % 15;
    }

    public function print(int $number): string
    {
        return 'FizzBuzz';
    }
}
