<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('payment_plan_id')
                ->nullable()
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->string('stripe_subscription_id')
                ->unique()
                ->nullable();
            $table->text('stripe_subscription_details')
                ->nullable();
            $table->timestamp('start_date')
                ->nullable();
            $table->timestamp('end_date')
                ->nullable();
            $table->boolean('is_active')
                ->default(true)
                ->index();
            $table->json('trial_period')
                ->nullable();
            $table->text('notes')
                ->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
