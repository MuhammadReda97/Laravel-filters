<?php

namespace ArchiTools\LaravelSieve\Exceptions\Joins;

use ArchiTools\LaravelSieve\Enums\Joins\JoinTypeEnum;
use RuntimeException;

class InvalidJoinTypeException extends RuntimeException
{
    public function __construct(string $type)
    {
        parent::__construct("Invalid join type: '{$type}'. Valid types are: " . implode(', ', JoinTypeEnum::values()));
    }
}