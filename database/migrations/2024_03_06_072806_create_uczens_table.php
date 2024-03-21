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
            $table->integer('kierunek');
            $table->string('imie');
            $table->string('imie2')->nullable();
            $table->string('nazwisko');
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();
            $table->date('data_urodzenia')->nullable();
            $table->string('pesel')->nullable();
            $table->string('miejsce_urodzenia')->nullable();
            $table->string('adres_kodpocz',10)->nullable();
            $table->string('adres_ulica',70)->nullable();
            $table->string('adres_nrdom',10)->nullable();
            $table->string('adres_nrmie',10)->nullable();
            $table->string('adres_miasto')->nullable();
            $table->string('imie_nazwisko_matki')->nullable();
            $table->string('imie_nazwisko_ojca')->nullable();
            $table->string('telefon_matki')->nullable();
            $table->string('telefon_ojca')->nullable();
            $table->string('email_matki')->nullable();
            $table->string('email_ojca')->nullable();
            $table->string('img')->nullable();

            $table->string('adres_kodpocz_matki',10)->nullable();
            $table->string('adres_ulica_matki',70)->nullable();
            $table->string('adres_nrdom_matki',10)->nullable();
            $table->string('adres_nrmie_matki',10)->nullable();
            $table->string('adres_miasto_matki')->nullable();

            $table->string('adres_kodpocz_ojca',10)->nullable();
            $table->string('adres_ulica_ojca',70)->nullable();
            $table->string('adres_nrdom_ojca',10)->nullable();
            $table->string('adres_nrmie_ojca',10)->nullable();
            $table->string('adres_miasto_ojca')->nullable();
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
