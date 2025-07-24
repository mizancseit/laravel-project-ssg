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
        Schema::create('device_registers', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address')->nullable();
            $table->string('device_info')->nullable();
            $table->string('platform')->nullable();
            $table->foreignId('user_id')
                ->constrained("users")
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_registers');
    }
};
