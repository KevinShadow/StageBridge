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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id("id_entreprise");
            $table->string("nom_entreprise");
            $table->string("secteur");
            $table->string("email_entreprise")->unique();
            $table->string("password");
            $table->string("site_entreprise");
            $table->integer("numero_entreprise");
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
        Schema::dropIfExists('entreprises');
    }
};
