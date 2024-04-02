<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uczen extends Model
{
    use HasFactory;
    protected $fillable = [
        'kierunek',
        'imie',
        'imie2',
        'nazwisko',
        'telefon',
        'email',
        'data_urodzenia',
        'pesel',
        'miejsce_urodzenia',
        'adres_kodpocz',
        'adres_ulica',
        'adres_nrdom',
        'adres_nrmie',
        'adres_miasto',
        'imie_nazwisko_matki',
        'imie_nazwisko_ojca',
        'telefon_matki',
        'telefon_ojca',
        'email_matki',
        'email_ojca',
        'img',
        'adres_kodpocz_matki',
        'adres_ulica_matki',
        'adres_nrdom_matki',
        'adres_nrmie_matki',
        'adres_miasto_matki',
        'adres_kodpocz_ojca',
        'adres_ulica_ojca',
        'adres_nrdom_ojca',
        'adres_nrmie_ojca',
        'adres_miasto_ojca',
    ];

   

    }
