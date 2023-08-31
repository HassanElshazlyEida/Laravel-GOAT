<?php

namespace Modules\Settings\Exceptions;

use Modules\CustomException;

class SettingException extends CustomException
{
    public static function noValueProvided(): static
    {
        return new static('No value was provided',422);
    }
}
