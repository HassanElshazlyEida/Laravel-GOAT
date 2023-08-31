<?php

namespace Modules\Settings\Interfaces;

use App\Models\User;
use Modules\Settings\DTO\SettingDto;
use Modules\Settings\Models\Setting;
use Modules\Settings\Enums\SettingType;
use Illuminate\Database\Eloquent\Collection;

interface SettingServiceInterface
{
    /**
     * @param User $user
     * @param SettingDto $dto
     * @return void
     */
    public function store(User $user, SettingDto $dto ):Setting;
    /**
     * @param User $user
     * @param array $setting
     * @return Setting
     */
    public function storeMany(User $user, array $setting):Collection;
}
