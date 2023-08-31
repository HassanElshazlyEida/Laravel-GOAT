<?php

namespace Modules\Settings\DTO;

use Modules\Settings\Enums\SettingType;

readonly class SettingDto
{
    public function __construct(
        public SettingType $type,
        public string $value
    )
    {   }
    public static function fromRequest($request){
        return new static(
            type: SettingType::from($request->validated('type')),
            value: $request->validated('value')
        );
    }
}

