<?php

namespace Modules\Settings\Services;

use App\Models\User;
use Illuminate\Support\Collection;
use Modules\Settings\DTO\SettingDto;
use Modules\Settings\Exceptions\SettingException;
use Modules\Settings\Interfaces\SettingServiceInterface;
use Modules\Settings\Models\Setting;

class SettingService implements SettingServiceInterface
{
    public function store(User $user, SettingDto $dto): Setting
    {
        if (! $dto->value) {
            throw SettingException::noValueProvided();
        }

        /** @var Setting */
        return Setting::updateOrCreate(
            [
                'user_id' => $user->id,
                'type' => $dto->type,
            ],
            [
                'value' => $dto->value,
            ]);

    }

    public function storeMany(User $user, array $settings): Collection
    {
        $results = [];
        foreach ($settings as $key => $value) {
            $results[] = $this->store($user, $value);
        }

        return collect($results);
    }
}
