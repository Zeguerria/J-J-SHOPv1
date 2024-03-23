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
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('produit_id')->references('id')->on('produits')->constrained();
            $table->foreignId('user_id')->references('id')->on('users')->constrained();
            // information de l'uitilsateur
            $table->integer('nombre')->nullable();
            $table->integer('prix')->nullable();
            $table->string('supprimer')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paniers');
    }
};
