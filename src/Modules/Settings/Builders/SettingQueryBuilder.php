<?php

namespace Modules\Settings\Builders;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class SettingQueryBuilder extends Builder
{
    /**
     * @param  User  $user
     * @return self
     */
    public function forUser(User $user): self
    {
        return $this->where('user_id', $user->id);
    }
}
