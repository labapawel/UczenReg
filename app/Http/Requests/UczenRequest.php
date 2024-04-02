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
            'imie_nazwisko_ojca' => 'required|string|max:255',
            'telefon_ojca' => 'required|string|max:255',
            'email_ojca' => 'required|email|max:255',
            'adres_kodpocz_ojca' => 'required|string|max:10',
            'adres_ulica_ojca' => 'required|string|max:70',
            'adres_nrdom_ojca' => 'nullable|string|max:10',
            'adres_miasto_ojca' => 'required|string|max:255'
        ];

        $matka = [
            'imie_nazwisko_matki' => 'required|string|max:255',
            'telefon_matki' => 'required|string|max:255',
            'email_matki' => 'required|email|max:255',
            'adres_kodpocz_matki' => 'required|string|max:10',
            'adres_ulica_matki' => 'required|string|max:70',
            'adres_nrdom_matki' => 'required|string|max:10',
            'adres_nrmie_matki' => 'nullable|string|max:10',
            'adres_miasto_matki' => 'required|string|max:255'
        ];

        $form = $this->all();
        $keys = array_keys($form);
        $arr = [
            'imie' => 'required|string|max:255',
            'imie2' => 'nullable|string|max:255',
            'nazwisko' => 'required|string|max:255',
            'telefon' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'data_urodzenia' => 'required|date',
            'pesel' => 'required|string|max:11',
            'miejsce_urodzenia' => 'required|string|max:255',
            'adres_kodpocz' => 'required|string|max:10',
            'adres_ulica' => 'required|string|max:70',
            'adres_nrdom' => 'required|string|max:10',
            'adres_nrmie' => 'nullable|string|max:10',
            'adres_miasto' => 'required|string|max:255',
            'regulamin' => 'required|string|max:10',
            'regulamin_elek' => 'required|string|max:10'

        ];


        if (!(in_array('informatyk', $keys) || in_array('programista', $keys))){
            $arr['kierunek']='required';    
        }
        if(isset($form['imie_nazwisko_ojca']) && !empty($form['imie_nazwisko_ojca']))
                $arr = array_merge($arr, $ojciec);
        if(isset($form['imie_nazwisko_matki']) && !empty($form['imie_nazwisko_matki']))
                $arr = array_merge($arr, $matka);
        if(empty($form['imie_nazwisko_matki']) &&  empty($form['imie_nazwisko_ojca']))
                $arr = array_merge($arr, $matka);
        //dd($keys, $arr, $form);
        return $arr;
    }
}