<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlugController extends Controller
{
    /**
     * Generate unique slug
     * 
     * @param string $baseSlug
     * @return string
     */
    public static function generateUniqueSlug(string $baseSlug): string
    {
        $baseSlug = str_replace(' ', '-', $baseSlug);
        $slug = strtolower($baseSlug);
        $notExist = false;
        while (!$notExist) {
            $notExist = !Profile::where('slug', '=', $slug)->exists();
            $slug = strtolower("{$baseSlug}-" . Str::random(random_int(1, 15)));
        }

        return $slug;
    }
}
