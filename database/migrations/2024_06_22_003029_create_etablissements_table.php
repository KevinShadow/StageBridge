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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id("id_etablissement");
            $table->string("nom_etablissement");
            $table->string("email_etablissement")->unique();
            $table->string("password");
            $table->string('site_etablissement');
            $table->integer("numero_etablissement");
            $table->string("nom_responsable");
            $table->string("email_responsable");
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissements');
    }
};
