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
        Schema::create('apprenants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->string('name');
            $table->string('email');
            $table->string('portfolio')->nullable();
            $table->string('videoDemo')->nullable();
            $table->unsignedBigInteger('cohorteID');
            $table->unsignedBigInteger('domaineID');
            $table->timestamps();

            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('CohorteId')->references('id')->on('cohortes');
            $table->foreign('DomaineId')->references('id')->on('domaines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprenants');
    }
};
