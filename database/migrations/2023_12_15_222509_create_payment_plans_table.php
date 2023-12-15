<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')
                ->index();
            $table->text('description')
                ->nullable();
            $table->decimal('price', 6)
                ->nullable();
            $table->string('currency', 3)
                ->nullable();
            $table->integer('max_urls')
                ->nullable();
            $table->json('additional_features')
                ->nullable();
            $table->boolean('is_default')
                ->default(false)
                ->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_plans');
    }
};
