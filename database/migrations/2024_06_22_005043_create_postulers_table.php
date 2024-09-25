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
        Schema::create('postulers', function (Blueprint $table) {
            $table->id("id_postuler");
            $table->unsignedBigInteger("id_etudiant");
            $table->unsignedBigInteger("id_stage");
            $table->enum("status",["attente", "approuver", "rejeter"]);
            $table->timestamps();

            /*cle etranger*/
            $table->foreign("id_etudiant")->references("id_etudiant")->on("etudiants")->onDelete("cascade");
            $table->foreign("id_stage")->references("id_stage")->on("stages")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulers');
    }
};
