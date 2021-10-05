<?php

declare(strict_types=1);

namespace App;

use App\Rule\DefaultRule;
use App\Rule\RuleInterface;

class Application
{
    private array $rules = [];

    public function print(int $number): void
    {
        foreach (range(1, $number) as $n) {
            $rule = $this->getRule($n);

            echo $rule->print($n) . PHP_EOL;
        }
    }

    private function getRule(int $number): RuleInterface
    {
        foreach ($this->rules as $rule) {
            if ($rule->canBeUsed($number)) {
                return $rule;
            }
        }

        return new DefaultRule();
    }

    public function addRule(RuleInterface $rule): void
    {
        $this->rules[] = $rule;
    }
}
