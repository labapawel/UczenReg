<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uczen extends Model
{
    use HasFactory;
    protected $fillable = [
        'imie',
        'imie2',
        'nazwisko',
        'telefon',
        'email',
        'data_urodzenia',
        'pesel',
        'miejsce_urodzenia',
        'adres_zamieszkania',
        'imie_nazwisko_matki',
        'imie_nazwisko_ojca',
        'telefon_matki',
        'telefon_ojca',
        'email_matki',
        'email_ojca',
        'adres_zamieszkania_matki',
        'adres_zamieszkania_ojca',
    ];
}
