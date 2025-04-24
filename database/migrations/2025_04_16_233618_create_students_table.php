<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->index()->nullable()->constrained()->nullOnDelete();
            $table->string('name')->default(0);
            $table->string('lastname')->default(0);
            $table->tinyInteger('age')->default(0);
            $table->string('address')->default(0);
            $table->string('phone_number')->default(0);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
