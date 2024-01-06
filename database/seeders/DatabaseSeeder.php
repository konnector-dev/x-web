<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->isLocal() || app()->runningUnitTests()) {
            $this->call([
                UserSeeder::class,
                ProjectSeeder::class,
                UrlSeeder::class,
            ]);
        }
    }
}
