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
        Schema::create('vehiclebookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('staffid');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('is_approved');
            $table->string('status'); // success, rejected, postponed, cancelled
            $table->string('document');
            $table->foreignId('driver_id');
            $table->foreignId('cartype_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiclebookings');
    }
};
