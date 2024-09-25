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
        Schema::create('applications', function (Blueprint $table) {
            $table->id("id_appli");
            $table->unsignedBigInteger("id_etudiant");
            $table->unsignedBigInteger("id_emploi");
            $table->enum("status",["attente", "aprouver", "rejeter"]);
            $table->timestamps();

            /*cle etranger*/
            $table->foreign("id_etudiant")->references("id_etudiant")->on("etudiants")->onDelete("cascade");
            $table->foreign("id_emploi")->references("id_emploi")->on("emplois")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
