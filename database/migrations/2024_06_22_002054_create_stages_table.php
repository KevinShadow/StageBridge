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
        Schema::create('stages', function (Blueprint $table) {
            $table->id("id_stage");
            $table->unsignedBigInteger("id_entreprise");
            $table->string("titre");
            $table->string("domaine");
            $table->string('image')->nullable();
            $table->string("description");
            $table->string("competence_requis");
            $table->string("location");
            $table->string("fichier");
            $table->string("durer");
            $table->timestamps();

            /*cle etranger*/
            $table->foreign("id_entreprise")->references("id_entreprise")->on("entreprises")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
