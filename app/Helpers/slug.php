<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

if (!function_exists('generateSlug')) {
    function generateSlug(string $sluggableString)
    {
        return Str::slug($sluggableString);
    }
}
