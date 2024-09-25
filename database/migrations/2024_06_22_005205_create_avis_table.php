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
        Schema::create('avis', function (Blueprint $table) {
            $table->id("id_avis");
            $table->unsignedBigInteger("id_postuler");
            $table->unsignedBigInteger("id_etablissement");
            $table->string("status")->default("en attente");
            $table->text('message')->nullable();
            $table->timestamps();

            /*cle etranger */
            $table->foreign("id_postuler")->references("id_postuler")->on("postulers")->onDelete("cascade");
            $table->foreign("id_etablissement")->references("id_etablissement")->on("etablissements")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');
    }
};
