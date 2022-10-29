<?php

namespace Tests\Feature;

use App\Http\Controllers\SlugController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SlugTest extends TestCase
{
    /**
     * Test generate unique slug
     *
     * @return void
     */
    public function test_generate_unique_slug()
    {
        $slug = SlugController::generateUniqueSlug('Unique Slug');
        $this->assertStringContainsString('unique-slug-', $slug);
    }
}
