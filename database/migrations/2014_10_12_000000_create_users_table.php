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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('event_naam');
            $table->string('voornaam_partner_1');
            $table->string('achternaam_partner_1');
            $table->string('voornaam_partner_2');
            $table->string('achternaam_partner_2');
            $table->string('email')->unique();
            $table->date('trouwdatum');
            $table->string('telefoonnummer');
            $table->string('domeinnaam')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
