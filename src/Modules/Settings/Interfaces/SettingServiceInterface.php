<?php

namespace Modules\Settings\Interfaces;

use App\Models\User;
use Illuminate\Support\Collection;
use Modules\Settings\DTO\SettingDto;
use Modules\Settings\Models\Setting;

interface SettingServiceInterface
{
    /**
     * @param  User  $user
     * @param  SettingDto  $dto
     * @return Setting
     */
    public function store(User $user, SettingDto $dto): Setting;

    /**
     * @param  User  $user
     * @param  SettingDto[]  $setting
     * @return Collection
     */
    public function storeMany(User $user, array $setting): Collection;
}
