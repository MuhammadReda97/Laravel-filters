<?php

namespace ArchiTools\LaravelSieve\Exceptions\Operators;

use ArchiTools\LaravelSieve\Enums\Operators\OperatorEnum;
use RuntimeException;

class InvalidOperatorException extends RuntimeException
{
    public function __construct(string $operator)
    {
        parent::__construct("Invalid operator: '{$operator}'. Allowed operators are: " . implode(', ', OperatorEnum::values()));
    }
} 