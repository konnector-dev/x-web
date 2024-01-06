<?php

namespace Database\Seeders;

use App\Models\Url;
use Illuminate\Database\Seeder;

class UrlSeeder extends Seeder
{
    public function run(): void
    {
        Url::factory()->count(10)->create();
    }
}
