<?php

namespace Modules\Settings\DTO;

use Modules\Settings\Enums\SettingType;

readonly class SettingDto
{
    public function __construct(
        public SettingType $type,
        public string $value
    ) {
    }

    public static function fromRequest($request): self
    {
        return new self(
            type: SettingType::from($request->validated('type')),
            value: $request->validated('value')
        );
    }
}
