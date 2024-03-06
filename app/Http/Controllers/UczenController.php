<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UczenRequest;

class UczenController extends Controller
{
    public function index($id){
        dd($id);
    }

    public function store(UczenRequest $request)
    {
        // Walidacja danych wejściowych została już wykonana na poziomie UczenRequest

        // Zapisz dane ucznia do bazy danych
        $dane = \App\Models\Uczen::firstOrCreate(['pesel'=>$request->pesel,'imie'=>$request->imie,'nazwisko'=>$request->nazwisko]);
        $dane->fill($request->all());
        $dane->save();
        
        return redirect()->route('uczen.data', md5($dane->id.$dane->imie.$dane->nazwisko));
        // Tutaj możesz przekierować użytkownika gdzieś po zapisaniu danych, np. do listy uczniów
    }
}
