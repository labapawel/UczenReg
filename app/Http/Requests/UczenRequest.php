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
            'regulamin' => 'required',
            'regulamin_elek' => 'required',
            'imie' => 'required|alpha|max:255',
            'imie2' => 'nullable|alpha|max:255',
            'nazwisko' => 'required|alpha|max:255',
            'telefon' => 'required|numeric|max:255',
            'email' => 'required|email|max:255',
            'data_urodzenia' => 'required|date',
            'pesel' => 'required|numeric|max:11', // Poprawne PESEL ma 11 cyfr
            'miejsce_urodzenia' => 'required|string|max:255',
            'adres_zamieszkania' => 'required|string|max:255',
            'imie_nazwisko_matki' => 'nullable|string|max:255',
            'imie_nazwisko_ojca' => 'nullable|string|max:255',
            'telefon_matki' => 'nullable|numeric|max:255',
            'telefon_ojca' => 'nullable|numeric|max:255',
            'email_matki' => 'nullable|email|max:255',
            'email_ojca' => 'nullable|email|max:255',
            'adres_zamieszkania_matki' => 'nullable|string|max:255',
            'adres_zamieszkania_ojca' => 'nullable|string|max:255',
        ];

        if (!(in_array('informatyk', $keys) || in_array('programista', $keys))){
            $arr['kierunek']='required';    
        }
        return $arr;
    }
}
