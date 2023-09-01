<?php

namespace Modules;

class CustomException extends \Exception
{
    public static function internalException(): self
    {
        return new self('Internal server error', 500);
    }
}
