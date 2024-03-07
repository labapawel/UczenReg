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
                                <input class="form-check-input" type="checkbox" @if(!empty(old('programista'))) checked @endif name="programista" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1" >Programista</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" @if(!empty(old('informatyk'))) checked @endif name="informatyk" id="inlineCheckbox2" value="option1">
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
                            <div class="form-group row mt-3">
                                <label for="imie2" class="col-md-4 col-form-label text-md-right">Drugie imię</label>
                                <div class="col-md-6">
                                    <input id="imie2" type="text" class="form-control" name="imie2" value="{{old('imie2')}}">
                                </div>
                            </div>
                            @if ($errors->has('imie2'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('imie2') }}</strong>
                                </span>
                            @endif                            

                            <!-- Kolejne pola formularza -->
                            
                            <div class="form-group row mt-3">
                                <label for="nazwisko" class="col-md-4 col-form-label text-md-right">Nazwisko</label>
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
                                <label for="telefon" class="col-md-4 col-form-label text-md-right">Telefon</label>
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
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
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
                                <label for="data_urodzenia" class="col-md-4 col-form-label text-md-right">Data urodzenia</label>
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
                                <label for="miejsce_urodzenia" class="col-md-4 col-form-label text-md-right">Miejsce urodzenia</label>
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
                                <label for="pesel" class="col-md-4 col-form-label text-md-right">PESEL</label>
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

                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="adres_zamieszkania" class="col-md-4 col-form-label text-md-right">Adres zamieszkania</label>
                                <div class="col-md-6">
                                    <input id="adres_zamieszkania" type="text" class="form-control" name="adres_zamieszkania" value="{{old('adres_zamieszkania')}}">
                                </div>
                            </div>
                            @if ($errors->has('adres_zamieszkania'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('adres_zamieszkania') }}</strong>
                                </span>
                            @endif                            
                            <div class="form-group row mt-3">
                                <label for="foto" class="col-md-4 col-form-label text-md-right">Zdjęcie do legitymacji</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control" name="foto" accept=".jpg, .jpeg" value="{{old('foto')}}">
                                </div>
                            </div>


                            <!-- Pozostałe pola formularza -->

                            <!-- Pozostałe pola formularza -->
                            <h3 class="mt-4">Dane Matki/opiekunki</h3>
                            <div class="form-group row mt-3">
                                <label for="imie_nazwisko_matki" class="col-md-4 col-form-label text-md-right">Imię i nazwisko matki</label>
                                <div class="col-md-6">
                                    <input id="imie_nazwisko_matki" type="text" class="form-control" name="imie_nazwisko_matki" value="{{old('imie_nazwisko_matki')}}">
                                </div>
                            </div>
                            @if ($errors->has('imie_nazwisko_matki'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('imie_nazwisko_matki') }}</strong>
                                </span>
                            @endif                            


                            <!-- Pozostałe pola formularza -->
                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="telefon_matki" class="col-md-4 col-form-label text-md-right">Telefon matki</label>
                                <div class="col-md-6">
                                    <input id="telefon_matki" type="text" class="form-control" name="telefon_matki" value="{{old('telefon_matki')}}">
                                </div>
                            </div>
                            @if ($errors->has('telefon_matki'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('telefon_matki') }}</strong>
                                </span>
                            @endif                            


                            <!-- Pozostałe pola formularza -->
                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="email_matki" class="col-md-4 col-form-label text-md-right">Email matki</label>
                                <div class="col-md-6">
                                    <input id="email_matki" type="email" class="form-control" name="email_matki" value="{{old('email_matki')}}">
                                </div>
                            </div>
                            @if ($errors->has('email_matki'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email_matki') }}</strong>
                                </span>
                            @endif                            


                            <!-- Pozostałe pola formularza -->
                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="adres_zamieszkania_matki" class="col-md-4 col-form-label text-md-right">Adres zamieszkania matki</label>
                                <div class="col-md-6">
                                    <input id="adres_zamieszkania_matki" type="text" class="form-control" name="adres_zamieszkania_matki" value="{{old('adres_zamieszkania_matki')}}">
                                </div>
                            </div>
                            @if ($errors->has('adres_zamieszkania_matki'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('adres_zamieszkania_matki') }}</strong>
                                </span>
                            @endif                            


                            <!-- Pozostałe pola formularza -->

                            <h3 class="mt-4">Dane Ojca/opiekuna</h3>
                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="imie_nazwisko_ojca" class="col-md-4 col-form-label text-md-right">Imię i nazwisko ojca</label>
                                <div class="col-md-6">
                                    <input id="imie_nazwisko_ojca" type="text" class="form-control" name="imie_nazwisko_ojca" value="{{old('imie_nazwisko_ojca')}}">
                                </div>
                            </div>
                            @if ($errors->has('imie_nazwisko_ojca'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('imie_nazwisko_ojca') }}</strong>
                                </span>
                            @endif                            


                            <!-- Pozostałe pola formularza -->


                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="telefon_ojca" class="col-md-4 col-form-label text-md-right">Telefon ojca</label>
                                <div class="col-md-6">
                                    <input id="telefon_ojca" type="text" class="form-control" name="telefon_ojca" value="{{old('telefon_ojca')}}">
                                </div>
                            </div>
                            @if ($errors->has('telefon_ojca'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('telefon_ojca') }}</strong>
                                </span>
                            @endif                            


                            <!-- Pozostałe pola formularza -->


                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="email_ojca" class="col-md-4 col-form-label text-md-right">Email ojca</label>
                                <div class="col-md-6">
                                    <input id="email_ojca" type="email" class="form-control" name="email_ojca" value="{{old('email_ojca')}}">
                                </div>
                            </div>
                            @if ($errors->has('email_ojca'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email_ojca') }}</strong>
                                </span>
                            @endif                            


                            <!-- Pozostałe pola formularza -->


                            <!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="adres_zamieszkania_ojca" class="col-md-4 col-form-label text-md-right">Adres zamieszkania ojca</label>
                                <div class="col-md-6">
                                    <input id="adres_zamieszkania_ojca" type="text" class="form-control" name="adres_zamieszkania_ojca" value="{{old('adres_zamieszkania_ojca')}}">
                                </div>
                            </div>
                            @if ($errors->has('adres_zamieszkania_ojca'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('adres_zamieszkania_ojca') }}</strong>
                                </span>
                            @endif                            


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
