<?php

namespace Modules;

class CustomException extends \Exception
{
    public static function internalException(): static {
        return new static('Internal server error',500);
    }
}
 