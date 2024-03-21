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
        $ojciec = [
            'imie_nazwisko_ojca' => 'nullable|string|max:255',
            'telefon_ojca' => 'nullable|string|max:255',
            'email_ojca' => 'nullable|email|max:255',
            'adres_kodpocz_ojca' => 'nullable|string|max:10',
            'adres_ulica_ojca' => 'nullable|string|max:70',
            'adres_nrdom_ojca' => 'nullable|string|max:10',
            'adres_miasto_ojca' => 'nullable|string|max:255'
        ];

        $matka = [
            'imie_nazwisko_matki' => 'nullable|string|max:255',
            'telefon_matki' => 'nullable|string|max:255',
            'email_matki' => 'nullable|email|max:255',
            'adres_kodpocz_matki' => 'nullable|string|max:10',
            'adres_ulica_matki' => 'nullable|string|max:70',
            'adres_nrdom_matki' => 'nullable|string|max:10',
            'adres_miasto_matki' => 'nullable|string|max:255'
        ];

        $form = $this->only(['informatyk','programista','pesel','data_urodzenia','imie_nazwisko_matki','imie_nazwisko_ojca']);
        $keys = array_keys($form);
        $arr = [
            'imie' => 'required|string|max:255',
            'imie2' => 'nullable|string|max:255',
            'nazwisko' => 'required|string|max:255',
            'telefon' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'data_urodzenia' => 'nullable|date',
            'pesel' => 'nullable|string|max:255',
            'miejsce_urodzenia' => 'nullable|string|max:255',
            'adres_kodpocz' => 'nullable|string|max:10',
            'adres_ulica' => 'nullable|string|max:70',
            'adres_nrdom' => 'nullable|string|max:10',
            'adres_miasto' => 'nullable|string|max:255'

        ];


        if (!(in_array('informatyk', $keys) || in_array('programista', $keys))){
            $arr['kierunek']='required';    
        }
        if(isset($keys['imie_nazwisko_ojca']) && !empty(keys['imie_nazwisko_ojca']))
                $arr = array_merge($arr, $ojciec);
        if(isset($keys['imie_nazwisko_matki']) && !empty(keys['imie_nazwisko_matki']))
                $arr = array_merge($arr, $matka);

        return $arr;
    }
}
