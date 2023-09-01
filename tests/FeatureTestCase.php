<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

abstract class FeatureTestCase extends TestCase
{
    use CreatesApplication , LazilyRefreshDatabase;

    protected  User  $currentUser;
    protected function signIn(User $user = null,bool $api = false) : self {
        if(!$user){
            /** @var User */
            $user = User::factory()->create();
        }
        $this->currentUser = $user;
     
        return $this->actingAs($user,$api ? 'api' : 'web');

    }
    public function getUser(): User
    {
        return $this->currentUser;
    }
}
