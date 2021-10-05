<?php

use App\Rule\DefaultRule;
use App\Rule\FizzBuzz;
use App\Rule\Buzz;
use App\Rule\Fizz;

include_once __DIR__.'/../vendor/autoload.php';

$fizzBuzz = new \App\Application();
$fizzBuzz->addRule(new FizzBuzz());
$fizzBuzz->addRule(new Buzz());
$fizzBuzz->addRule(new Fizz());

$fizzBuzz->print(20);
