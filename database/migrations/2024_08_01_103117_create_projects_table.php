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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nom_projet');
            $table->integer('statut_projet')->default(99); //1 pour le projet fini et 99 pour le projet en cours
            $table->text('details_projet');
            $table->string('date_debut')->nullable();
            $table->string('date_fin')->nullable();

            $table->foreignId('partenaire_id')->constrained(); // fait reference au partenaire(client) pour qui le projet a ete fait 

            //les autres details comme photos de projets peuvent etre mis sur notre blog

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
