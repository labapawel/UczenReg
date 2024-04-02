<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    | @see https://github.com/caouecs/Laravel-lang master@4.0.6 2019-11-07
    |
    */


    'accepted' => 'Pole :attribute musi zostać zaakceptowane.',
    'active_url' => 'Pole :attribute nie jest prawidłowym adresem URL.',
    'after' => 'Data w polu :attribute musi być datą późniejszą niż :date.',
    'after_or_equal' => 'Data w polu :attribute musi być datą późniejszą lub równą :date.',
    'alpha' => 'Pole :attribute może zawierać tylko litery.',
    'alpha_dash' => 'Pole :attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.',
    'alpha_num' => 'Pole :attribute może zawierać tylko litery i cyfry.',
    'array' => 'Pole :attribute musi być tablicą.',
    'before' => 'Data w polu :attribute musi być datą wcześniejszą niż :date.',
    'before_or_equal' => 'Data w polu :attribute musi być datą wcześniejszą lub równą :date.',
    'between' => [
      'numeric' => 'Wartość w polu :attribute musi mieścić się w przedziale od :min do :max.',
      'file' => 'Plik :attribute musi mieć rozmiar pomiędzy :min a :max kilobajtów.',
      'string' => 'Tekst w polu :attribute musi zawierać się w przedziale od :min do :max znaków.',
      'array' => 'Tablica :attribute musi zawierać od :min do :max elementów.',
    ],
    'boolean' => 'Pole :attribute musi mieć wartość prawda lub fałsz.',
    'confirmed' => 'Potwierdzenie pola :attribute nie jest zgodne.',
    'date' => 'Pole :attribute nie jest prawidłową datą.',
    'date_equals' => 'Data w polu :attribute musi być równa :date.',
    'date_format' => 'Format daty w polu :attribute jest nieprawidłowy. Poprawny format: :format.',
    'different' => 'Pola :attribute i :other muszą się różnić.',
    'digits' => 'Pole :attribute musi mieć :digits cyfr.',
    'digits_between' => 'Pole :attribute musi mieć od :min do :max cyfr.',
    'dimensions' => 'Wymiary obrazu w polu :attribute są nieprawidłowe.',
    'distinct' => 'Wartość w polu :attribute została zduplikowana.',
    'email' => 'Adres e-mail w polu :attribute jest nieprawidłowy.',
    'ends_with' => 'Pole :attribute musi kończyć się jednym z następujących ciągów: :values',
    'exists' => 'Wybrana wartość pola :attribute jest nieprawidłowa.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi zawierać jakąś wartość.',
    
    'gt' => [
        'numeric' => 'Wartość w polu :attribute musi być większa niż :value.',
        'file' => 'Plik :attribute musi mieć rozmiar większy niż :value kilobajtów.',
        'string' => 'Tekst w polu :attribute musi zawierać więcej niż :value znaków.',
        'array' => 'Tablica :attribute musi zawierać więcej niż :value elementów.',
      ],
      'gte' => [
        'numeric' => 'Wartość w polu :attribute musi być większa lub równa :value.',
        'file' => 'Plik :attribute musi mieć rozmiar większy lub równy :value kilobajtów.',
        'string' => 'Tekst w polu :attribute musi zawierać co najmniej :value znaków.',
        'array' => 'Tablica :attribute musi zawierać co najmniej :value elementów.',
      ],
      'image' => 'Pole :attribute musi zawierać obraz.',
      'in' => 'Wybrana wartość pola :attribute jest nieprawidłowa.',
      'in_array' => 'Wartość pola :attribute nie istnieje w :other.',
      'integer' => 'Pole :attribute musi być liczbą całkowitą.',
      'ip' => 'Pole :attribute musi być prawidłowym adresem IP.',
      'ipv4' => 'Pole :attribute musi być prawidłowym adresem IPv4.',
      'ipv6' => 'Pole :attribute musi być prawidłowym adresem IPv6.',
      'json' => 'Pole :attribute musi być prawidłowym ciągiem JSON.',
      'lt' => [
        'numeric' => 'Wartość w polu :attribute musi być mniejsza niż :value.',
        'file' => 'Plik :attribute musi mieć rozmiar mniejszy niż :value kilobajtów.',
        'string' => 'Tekst w polu :attribute musi zawierać mniej niż :value znaków.',
        'array' => 'Tablica :attribute musi zawierać mniej niż :value elementów.',
      ],
      'lte' => [
        'numeric' => 'Wartość w polu :attribute musi być mniejsza lub równa :value.',
        'file' => 'Plik :attribute musi mieć rozmiar mniejszy lub równy :value kilobajtów.',
        'string' => 'Tekst w polu :attribute musi zawierać co najwyżej :value znaków.',
        'array' => 'Tablica :attribute musi zawierać nie więcej niż :value elementów.',
      ],
      'max' => [
        'numeric' => 'Wartość w polu :attribute nie może być większa niż :max.',
        'file' => 'Plik :attribute nie może mieć rozmiaru większego niż :max kilobajtów.',
        'string' => 'Tekst w polu :attribute nie może zawierać więcej niż :max znaków.',
        'array' => 'Tablica :attribute nie może zawierać więcej niż :max elementów.',
      ],
      'mimes' => 'Pole :attribute musi zawierać plik typu: :values.',
      'mimetypes' => 'Pole :attribute musi zawierać plik typu: :values.',
      'min' => [
        'numeric' => 'Wartość w polu :attribute musi być co najmniej :min.',
        'file' => 'Plik :attribute musi mieć rozmiar co najmniej :min kilobajtów.',
        'string' => 'Tekst w polu :attribute musi zawierać co najmniej :min znaków.',
        'array' => 'Tablica :attribute musi zawierać co najmniej :min elementów.',
      ],
      'not_in' => 'Wybrana wartość pola :attribute jest nieprawidłowa.',
      'not_regex' => 'Format pola :attribute jest nieprawidłowy.',
      'numeric' => 'Pole :attribute musi być liczbą.',
      'password' => 'Hasło jest nieprawidłowe.',
      'present' => 'Pole :attribute musi być obecne.',
      'regex' => 'Format pola :attribute jest nieprawidłowy.',
      'required' => 'Pole :attribute jest wymagane.',
      'required_if' => 'Pole :attribute jest wymagane, gdy :other ma wartość :value.',
      'required_unless' => 'Pole :attribute jest wymagane, chyba że :other znajduje się w :values.',
      'required_with' => 'Pole :attribute jest wymagane, gdy :values jest obecne.',
      'required_with_all' => 'Pole :attribute jest wymagane, gdy obecne są wszystkie :values.',
      
      'required_with' => 'Pole :attribute jest wymagane, gdy :values jest obecne.',
      'required_with_all' => 'Pole :attribute jest wymagane, gdy obecne są wszystkie :values.',
      'required_without' => 'Pole :attribute jest wymagane, gdy :values nie jest obecne.',
      'required_without_all' => 'Pole :attribute jest wymagane, gdy żadne z :values nie jest obecne.',
      'same' => 'Wartość pola :attribute musi być taka sama jak :other.',
      'size' => [
        'numeric' => 'Wartość w polu :attribute musi wynosić :size.',
        'file' => 'Plik :attribute musi mieć rozmiar :size kilobajtów.',
        'string' => 'Tekst w polu :attribute musi zawierać :size znaków.',
        'array' => 'Tablica :attribute musi zawierać :size elementów.',
      ],
      
      'starts_with' => 'Pole :attribute musi zaczynać się jednym z następujących ciągów: :values',
      'string' => 'Pole :attribute musi być ciągiem znaków.',
      'timezone' => 'Pole :attribute musi być prawidłową strefą czasową.',
      'unique' => 'Wartość pola :attribute została już zajęta.',
      'uploaded' => 'Przesłanie pliku :attribute nie powiodło się.',
      'url' => 'Format pola :attribute jest nieprawidłowy.',
      'uuid' => 'Pole :attribute musi być prawidłowym identyfikatorem UUID.',
      
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name'                  => 'Imię',
        'username'              => 'Nazwa użytkownika',
        'email'                 => 'E-mail',
        'first_name'            => 'Imię',
        'last_name'             => 'Nazwisko',
        'password'              => 'Hasło',
        'password_confirmation' => 'Potwierdzenie hasła',
        'city'                  => 'Miasto',
        'country'               => 'Kraj',
        'address'               => 'Adres',
        'phone'                 => 'Telefon',
        'mobile'                => 'Telefon komórkowy',
        'age'                   => 'Wiek',
        'sex'                   => 'Płeć',
        'gender'                => 'Płeć',
        'day'                   => 'Dzień',
        'month'                 => 'Miesiąc',
        'year'                  => 'Rok',
        'hour'                  => 'Godzina',
        'minute'                => 'Minuta',
        'second'                => 'Sekunda',
        'title'                 => 'Tytuł',
        'content'               => 'Zawartość',
        'description'           => 'Opis',
        'excerpt'               => 'Wyciąg',
        'date'                  => 'Data',
        'time'                  => 'Czas',
        'available'             => 'Dostępny',
        'size'                  => 'Rozmiar',
    ],
    ];
