<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscription_id')
                ->nullable()
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->string('invoice_number')
                ->unique()
                ->nullable();
            $table->timestamp('issued_at')
                ->nullable();
            $table->timestamp('due_date')
                ->nullable();
            $table->decimal('amount', 6)
                ->nullable();
            $table->string('currency', 3)
                ->nullable();
            $table->enum('status', ['pending', 'paid', 'cancelled', 'overdue'])
                ->default('pending')
                ->index();
            $table->string('payment_method')
                ->nullable();
            $table->string('payment_reference')
                ->nullable();
            $table->timestamp('paid_at')
                ->nullable();
            $table->string('pdf_url')
                ->nullable();
            $table->json('tax')
                ->nullable();
            $table->json('discounts')
                ->nullable();
            $table->json('additional_charges')
                ->nullable();
            $table->text('notes')
                ->nullable();
            $table->integer('payment_attempts')
                ->default(0)
                ->nullable();
            $table->integer('reminders_sent')
                ->default(0)
                ->nullable();
            $table->decimal('late_fee', 6)
                ->default(0)
                ->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
