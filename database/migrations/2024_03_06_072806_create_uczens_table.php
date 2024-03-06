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
        Schema::create('uczens', function (Blueprint $table) {
            $table->id();
            $table->string('imie');
            $table->string('imie2')->nullable();
            $table->string('nazwisko');
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();
            $table->date('data_urodzenia')->nullable();
            $table->string('pesel')->nullable();
            $table->string('miejsce_urodzenia')->nullable();
            $table->string('adres_zamieszkania')->nullable();
            $table->string('imie_nazwisko_matki')->nullable();
            $table->string('imie_nazwisko_ojca')->nullable();
            $table->string('telefon_matki')->nullable();
            $table->string('telefon_ojca')->nullable();
            $table->string('email_matki')->nullable();
            $table->string('email_ojca')->nullable();
            $table->string('adres_zamieszkania_matki')->nullable();
            $table->string('adres_zamieszkania_ojca')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uczens');
    }
};
