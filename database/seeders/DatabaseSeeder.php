<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->runningUnitTests()) {
            $this->call([
                UserSeeder::class,
            ]);
        }
    }
}
