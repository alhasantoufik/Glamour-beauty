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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name',length:100)->nullable();
            $table->string('first_name',length:100)->nullable();
            $table->string('last_name',length:100)->nullable();

            $table->string('email',length:100)->uniqid();
            $table->string('password')->default('123456');
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('status')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
