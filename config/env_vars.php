<?php

use Illuminate\Support\Str;

return [
    'APP_NAME' => env('APP_NAME', 'Axe'),
    'CACHE_PREFIX' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', '_x_web_'), '_') . '__'),
];
