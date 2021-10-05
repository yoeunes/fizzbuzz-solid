<?php

declare(strict_types=1);

namespace App\Rule;

interface RuleInterface
{
    public function canBeUsed(int $number): bool;

    public function print(int $number): string;
}
