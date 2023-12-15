<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('urls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->string('url', Config::get('custom_vars.db.string.max_length'))
            ->index();
            $table->string('name')
                ->nullable()
                ->index();
            $table->enum('status', ['active', 'inactive'])
                ->default('active')
                ->index();
            $table->enum('state', ['up', 'down', 'pending', 'timeout', 'error'])
                ->default('pending')
                ->index();
            $table->timestamp('last_checked_at')
                ->nullable();
            $table->timestamp('last_up_at')
                ->nullable();
            $table->timestamp('last_down_at')
                ->nullable();
            $table->unsignedInteger('downtime_duration')
                ->default(0);
            $table->unsignedInteger('notifications_sent')
                ->default(0);
            $table->string('notification_type')
                ->default('email')
                ->nullable();
            $table->integer('notification_type_id')
                ->default(1)
                ->comment('1=>email, 2=>slack, 3=>webhook, 4+=>custom/other')
                ->nullable();
            $table->unsignedInteger('monitoring_frequency_minutes')
                ->default(10);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('urls');
    }
};
