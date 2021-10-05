<?php

declare(strict_types=1);

namespace App\Rule;

class Fizz implements RuleInterface
{
    public function canBeUsed(int $number): bool
    {
        return 0 === $number % 3;
    }

    public function print(int $number): string
    {
        return 'Fizz';
    }
}
