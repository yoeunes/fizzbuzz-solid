<?php

declare(strict_types=1);

namespace App\Rule;

class DefaultRule implements RuleInterface
{
    public function canBeUsed(int $number): bool
    {
        return true;
    }

    public function print(int $number): string
    {
        return (string) $number;
    }
}
