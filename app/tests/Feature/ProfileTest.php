<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * Test store profile
     *
     * @return void
     */
    public function test_store_profile()
    {
        $response = $this->from('/generate')->post('/profile-store', [
            'name' => 'John',
            'linkedin_url' => 'https://linkedin.com/',
            'github_url' => 'https://github.com/',
            'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        $response->assertRedirectContains('qr-code');
    }
}
