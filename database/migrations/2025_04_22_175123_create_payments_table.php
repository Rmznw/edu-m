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
            $table->timestamps();
            $table->foreignId('enrollment_id')->index()->constrained()->cascadeOnDelete();
            $table->date('paid_date');
            $table->double('amount')->default(0);
        });
    }




    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
