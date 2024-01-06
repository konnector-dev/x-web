<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UrlFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'project_id' => Project::factory(),
            'url' => $this->faker->url,
            'name' => $this->faker->word,
            'status' => 'active',
            'state' => 'pending',
            'last_checked_at' => null,
            'last_up_at' => null,
            'last_down_at' => null,
            'downtime_duration' => 0,
            'notifications_sent' => 0,
            'notification_type' => 'email',
            'notification_type_id' => 1,
            'monitoring_frequency_minutes' => 10
        ];
    }
}
