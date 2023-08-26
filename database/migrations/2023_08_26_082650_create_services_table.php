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
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // Colonne serviceID (clé primaire)
            $table->unsignedBigInteger('apprenantID')->nullable();
            $table->text('descriptionService');
            $table->timestamps();

            // Clé étrangère qui référence la table Apprenants
            $table->foreign('apprenantID')->references('id')->on('apprenants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
