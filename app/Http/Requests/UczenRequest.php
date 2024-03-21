<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UczenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Walidacja ucznia, przy przesyłaniu z formularza
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $form = $this->only(['informatyk','programista','pesel','data_urodzenia']);
        $keys = array_keys($form);
        $arr = [
            'imie' => 'required|alpha|max:255',
            'imie2' => 'nullable|alpha|max:255',
            'nazwisko' => 'required|alpha|max:255',
            'telefon' => 'required|numeric|max:255',
            'email' => 'required|email|max:255',
            'data_urodzenia' => 'required|date',
            'pesel' => 'required|numeric|max:11', // Poprawne PESEL ma 11 cyfr
            'miejsce_urodzenia' => 'required|string|max:255',
            'adres_kodpocz' => 'required|string|max:10',
            'adres_ulica' => 'required|string|max:70',
            'adres_nrdom' => 'required|string|max:10',
            'adres_nrmie' => 'nullable|string|max:10',
            'adres_miasto' => 'required|string|max:255',

            'imie_nazwisko_matki' => 'nullable|string|max:255',
            'imie_nazwisko_ojca' => 'nullable|string|max:255',
            'telefon_matki' => 'nullable|numeric|max:255',
            'telefon_ojca' => 'nullable|numeric|max:255',
            'email_matki' => 'nullable|email|max:255',
            'email_ojca' => 'nullable|email|max:255',

            'adres_kodpocz_matki' => 'required|string|max:10',
            'adres_ulica_matki' => 'required|string|max:70',
            'adres_nrdom_matki' => 'required|string|max:10',
            'adres_nrmie_matki' => 'nullable|string|max:10',
            'adres_miasto_matki' => 'required|string|max:255',

            'adres_kodpocz_ojca' => 'required|string|max:10',
            'adres_ulica_ojca' => 'required|string|max:70',
            'adres_nrdom_ojca' => 'required|string|max:10',
            'adres_nrmie_ojca' => 'nullable|string|max:10',
            'adres_miasto_ojca' => 'required|string|max:255',
        ];

        if (!(in_array('informatyk', $keys) || in_array('programista', $keys))){
            $arr['kierunek']='required';    
        }
        return $arr;
    }
}
