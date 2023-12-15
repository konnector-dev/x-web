<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('url_id')
                ->nullable()
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->enum('type', ['daily', 'weekly', 'monthly', 'custom'])
                ->default('daily')
                ->index();
            $table->timestamp('generated_at')
                ->nullable();
            $table->timestamp('start_date')
                ->nullable();
            $table->timestamp('end_date')
                ->nullable();
            $table->decimal('uptime', 5)
                ->nullable();
            $table->decimal('downtime', 5)
                ->nullable();
            $table->unsignedInteger('average_response_time')
                ->nullable();
            $table->unsignedInteger('total_checks')
                ->nullable();
            $table->unsignedInteger('successful_checks')
                ->nullable();
            $table->unsignedInteger('failed_checks')
                ->nullable();
            $table->json('error_distribution')
                ->nullable();
            $table->json('data')
                ->nullable();
            $table->text('notes')
                ->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
