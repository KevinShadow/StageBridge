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
        Schema::create('profil_etudiants', function (Blueprint $table) {
            $table->id("id_profil_etudiant");
            $table->unsignedBigInteger("id_etudiant");
            $table->string("image")->nullable();
            $table->string("nom");
            $table->string("prenom");
            $table->string("niveau");
            $table->string("description");
            $table->string("nom_etablissement");
            $table->timestamps();

            /*cle etranger*/
            $table->foreign("id_etudiant")->references("id_etudiant")->on("etudiants")->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_etudiants');
    }
};
