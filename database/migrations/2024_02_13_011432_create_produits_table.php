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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('description')->nullable();
            // $table->string('nombre')->nullable();
            $table->string('quantite')->nullable();
            $table->integer('prix')->nullable();
            $table->integer('solde')->nullable();
            // $table->foreignId('boutique_id')->default(0);
            $table->string('supprimer')->default(0);
            //
            $table->string('favori')->nullable()->default(0);
            $table->string('vue')->nullable()->default(0);
            $table->string('like')->default(0);

            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            //
            // $table->string('categorie')->nullable();
            $table->unsignedBigInteger('categorie_id')->default(0);
            $table->foreign('categorie_id')->references('id')->on('categories')->constrained();
            $table->unsignedBigInteger('parametre_id')->default(0);
            $table->foreign('parametre_id')->references('id')->on('parametres')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
