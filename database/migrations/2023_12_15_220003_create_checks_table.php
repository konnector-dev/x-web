<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('url_id')
                ->nullable()
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamp('checked_at')
                ->nullable();
            $table->unsignedInteger('response_time')
                ->nullable();
            $table->enum('status', ['up', 'down', 'pending', 'timeout', 'error'])
                ->default('pending')
                ->nullable()
                ->index();
            $table->unsignedInteger('http_code')
                ->nullable();
            $table->string('error_message')
                ->nullable();
            $table->json('details')
                ->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('checks');
    }
};
