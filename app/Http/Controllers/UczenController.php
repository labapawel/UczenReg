<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UczenRequest;

class UczenController extends Controller
{
    public function foto($id){
       return response()->file(storage_path('app/foto/' . $id));
    }
    public function index($id){
       return view('ok');
    }

    public function store(UczenRequest $request)
    {
        // Walidacja danych wejściowych została już wykonana na poziomie UczenRequest

      //  dd($request);
        $kierunek = 0;
        if($request->get('programista'))
            $kierunek |= 1;
        if($request->get('informatyk'))
            $kierunek |= 2;
        // Zapisz dane ucznia do bazy danych
        $dane = \App\Models\Uczen::firstOrCreate(['pesel'=>$request->pesel,'imie'=>$request->imie,'nazwisko'=>$request->nazwisko]);
        $dane->fill($request->all());
        $dane->kierunek = $kierunek;
        $dane->mddata = md5($dane->id.$dane->imie.$dane->nazwisko);
        $dane->save();
        
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $dane->img = $image->store('foto');
            $dane->save();
        }



        return redirect()->route('uczen.data', md5($dane->id.$dane->imie.$dane->nazwisko));
        // Tutaj możesz przekierować użytkownika gdzieś po zapisaniu danych, np. do listy uczniów
    }
}
