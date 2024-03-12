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
            $table->string('adres_zam_kodpocz', 10)->nullable();
            $table->string('adres_zam_miasto',100)->nullable();
            $table->string('adres_zam_ulica', 100)->nullable();
            $table->string('adres_zam_numdom', 10)->nullable();
            $table->string('adres_zam_nummie', 10)->nullable();
            $table->string('imie_nazwisko_matki')->nullable();
            $table->string('imie_nazwisko_ojca')->nullable();
            $table->string('telefon_matki')->nullable();
            $table->string('telefon_ojca')->nullable();
            $table->string('email_matki')->nullable();
            $table->string('email_ojca')->nullable();

            $table->string('adres_zam_kodpocz_matki', 10)->nullable();
            $table->string('adres_zam_miasto_matki',100)->nullable();
            $table->string('adres_zam_ulica_matki', 100)->nullable();
            $table->string('adres_zam_numdom_matki', 10)->nullable();
            $table->string('adres_zam_nummie_matki', 10)->nullable();

            $table->string('adres_zam_kodpocz_ojca', 10)->nullable();
            $table->string('adres_zam_miasto_ojca',100)->nullable();
            $table->string('adres_zam_ulica_ojca', 100)->nullable();
            $table->string('adres_zam_numdom_ojca', 10)->nullable();
            $table->string('adres_zam_nummie_ojca', 10)->nullable();
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
