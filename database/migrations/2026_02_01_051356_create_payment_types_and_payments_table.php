<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('payment_type');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignUuid('payment_type_id')->constrained('payment_types')->onDelete('cascade');
            $table->enum('status', ['paid', 'pending', 'overdue'])->default('pending');
            $table->date('payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_types_and_payments');
    }
};
