<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->enum('method', ['ewallet', 'bank_transfer', 'qris']);
            $table->string('provider', 50)->comment('GoPay, OVO, BCA, Mandiri, etc.');
            $table->decimal('amount', 12, 2);
            $table->enum('status', ['pending', 'verified', 'failed'])->default('pending');
            $table->string('proof_image')->nullable()->comment('Payment proof upload path');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
