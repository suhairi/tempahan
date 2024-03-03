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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plateNo')->unique();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('type')->nullable();
            $table->string('location')->nullable(); // ['HQ', 'Wilayah', 'Worksyop', 'Pengembangan', ...]
            $table->foreignId('driver_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
