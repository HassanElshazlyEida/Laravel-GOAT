<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\FeatureTestCase;

class ExampleFeatureTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function it_login_in_user(): void
    {
        $this->signIn();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
