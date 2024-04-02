@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodaj nowego kandydata</div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('uczen.store') }}">
                            @csrf
                            

                            <h3 class="mt-4 bold">*Kierunek</h3>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" @if(!empty(old('programista'))) checked @endif name="programista" id="inlineCheckbox1" value="1">
                                <label class="form-check-label" for="inlineCheckbox1" >Programista</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" @if(!empty(old('informatyk'))) checked @endif name="informatyk" id="inlineCheckbox2" value="2">
                                <label class="form-check-label" for="inlineCheckbox2">Informatyk</label>
                            </div>

                            @if ($errors->has('kierunek'))
                                <div class="text-danger" role="alert">
                                    <strong>{{ $errors->first('kierunek') }}</strong>
                                </div>
                            @endif                            
                            <h3 class="mt-4">Dane Kandydata</h3>

                            <div class="form-group row mt-3">
                                <label for="imie"  class="col-md-4 col-form-label text-md-right bold">*Imię</label>
                                <div class="col-md-6">
                                    <input id="imie" type="text" class="form-control" name="imie" value="{{old('imie')}}"  autofocus>
                                </div>
                            </div>
                            @if ($errors->has('imie'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('imie') }}</strong>
                                </span>
                            @endif
                            @include("inc.input", ['id'=>'imie2','title'=>"Drugie imie", 'req'=>false, 'errors'=>$errors])

                            <!-- Kolejne pola formularza -->
                            
                            <div class="form-group row mt-3">
                                <label for="nazwisko" class="col-md-4 col-form-label text-md-right bold">*Nazwisko</label>
                                <div class="col-md-6">
                                    <input id="nazwisko" type="text" class="form-control" name="nazwisko" value="{{old('nazwisko')}}" >
                                </div>
                            </div>
                            @if ($errors->has('nazwisko'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('nazwisko') }}</strong>
                                </span>
                            @endif                            

                            <!-- Pozostałe pola formularza -->

                            <div class="form-group row mt-3">
                                <label for="telefon" class="col-md-4 col-form-label text-md-right bold">*Telefon</label>
                                <div class="col-md-6">
                                    <input id="telefon" type="text" class="form-control" name="telefon" value="{{old('telefon')}}">
                                </div>
                            </div>
                            @if ($errors->has('telefon'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('telefon') }}</strong>
                                </span>
                            @endif                            

                            <!-- Pozostałe pola formularza -->

                            <div class="form-group row mt-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right bold">*Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}">
                                </div>
                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif                            

                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="data_urodzenia" class="col-md-4 col-form-label text-md-right bold">*Data urodzenia</label>
                                <div class="col-md-6">
                                    <input id="data_urodzenia" type="date" class="form-control" name="data_urodzenia" value="{{old('data_urodzenia')}}">
                                </div>
                            </div>
                            @if ($errors->has('data_urodzenia'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('data_urodzenia') }}</strong>
                                </span>
                            @endif                            


                            <div class="form-group row mt-3">
                                <label for="miejsce_urodzenia" class="col-md-4 col-form-label text-md-right bold">*Miejsce urodzenia</label>
                                <div class="col-md-6">
                                    <input id="miejsce_urodzenia" type="text" class="form-control" name="miejsce_urodzenia" value="{{old('miejsce_urodzenia')}}">
                                </div>
                            </div>
                            @if ($errors->has('miejsce_urodzenia'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('miejsce_urodzenia') }}</strong>
                                </span>
                            @endif                            
                            <!-- Pozostałe pola formularza -->

                            <div class="form-group row mt-3">
                                <label for="pesel" class="col-md-4 col-form-label text-md-right bold">*PESEL</label>
                                <div class="col-md-6">
                                    <input id="pesel" type="text" class="form-control" name="pesel" value="{{old('pesel')}}">
                                </div>
                            </div>
                            @if ($errors->has('pesel'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('pesel') }}</strong>
                                </span>
                            @endif                            

                            <!-- Pozostałe pola formularza -->


   @include("inc.input", ['id'=>'kodpocz','title'=>"Kod pocztowy", 'req'=>true, 'errors'=>$errors])
   @include("inc.input", ['id'=>'miasto','title'=>"Miasto", 'req'=>true, 'errors'=>$errors])

                            <div class="form-group row mt-3">
                                <label for="foto" class="col-md-4 col-form-label text-md-right">Zdjęcie do legitymacji</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control" name="foto" accept=".jpg, .jpeg" value="{{old('foto')}}">
                                </div>
                            </div>


                            <!-- Pozostałe pola formularza -->

                            <!-- Pozostałe pola formularza -->
                            <h3 class="mt-4">Dane Matki/opiekunki</h3>

                            @include("inc.input", ['id'=>'imie_nazwisko_matki','title'=>"Imię i nazwisko", 'req'=>false, 'errors'=>$errors, 'value' => $dane['imie_nazwisko_matki'] ?? null])
                            @include("inc.input", ['id'=>'telefon_matki','title'=>"Telefon", 'req'=>false, 'errors'=>$errors, 'value' => $dane['telefon_matki'] ?? null])
                            @include("inc.input", ['id'=>'email_matki','title'=>"Email", 'req'=>false, 'errors'=>$errors, 'value' => $dane['email_matki'] ?? null])

                            @include("inc.input", ['id'=>'adres_kodpocz_matki','title'=>"Kod pocztowy", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_kodpocz_matki'] ?? null])
                            @include("inc.input", ['id'=>'adres_ulica_matki','title'=>"Ulica", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_ulica_matki'] ?? null])
                            @include("inc.input", ['id'=>'adres_nrdom_matki','title'=>"Numer domu", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_nrdom_matki'] ?? null])
                            @include("inc.input", ['id'=>'adres_nrmie_matki','title'=>"Numer mieszkania", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_nrmie_matki'] ?? null])
                            @include("inc.input", ['id'=>'adres_miasto_matki','title'=>"Miasto", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_miasto_matki'] ?? null])



                            <!-- Pozostałe pola formularza -->

                            <h3 class="mt-4">Dane Ojca/opiekuna</h3>

                            @include("inc.input", ['id'=>'imie_nazwisko_ojca','title'=>"Imię i nazwisko", 'req'=>false, 'errors'=>$errors, 'value' => $dane['imie_nazwisko_ojca'] ?? null])
                            @include("inc.input", ['id'=>'telefon_ojca','title'=>"Telefon", 'req'=>false, 'errors'=>$errors, 'value' => $dane['telefon_ojca'] ?? null])
                            @include("inc.input", ['id'=>'email_ojca','title'=>"Email", 'req'=>false, 'errors'=>$errors, 'value' => $dane['email_ojca'] ?? null])

                            @include("inc.input", ['id'=>'adres_kodpocz_ojca','title'=>"Kod pocztowy ", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_kodpocz_ojca'] ?? null])
                            @include("inc.input", ['id'=>'adres_ulica_ojca','title'=>"Ulica", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_ulica_ojca'] ?? null])
                            @include("inc.input", ['id'=>'adres_nrdom_ojca','title'=>"Numer domu", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_nrdom_ojca'] ?? null])
                            @include("inc.input", ['id'=>'adres_nrmie_ojca','title'=>"Numer mieszkania", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_nrmie_ojca'] ?? null])
                            @include("inc.input", ['id'=>'adres_miasto_ojca','title'=>"Miasto", 'req'=>false, 'errors'=>$errors, 'value' => $dane['adres_miasto_ojca'] ?? null])
                        


                            @include('reg')
                            <!-- Pozostałe pola formularza -->

                            <div class="form-group row mt-3 mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Dodaj ucznia
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
