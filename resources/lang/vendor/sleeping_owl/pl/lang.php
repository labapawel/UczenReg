<?php

return [
  'dashboard' => 'Deska rozdzielcza',
  '404' => 'Strona nie znaleziona.',

  'auth' => [
    'title' => 'Autoryzacja',
    'username' => 'Nazwa użytkownika',
    'password' => 'Hasło',
    'login' => 'Zaloguj',
    'logout' => 'Wyloguj',
    'wrong-username' => 'Błędna nazwa użytkownika',
    'wrong-password' => 'lub hasło',
    'since' => 'Zarejestrowany w dniu: :date',
  ],

  'model' => [
    'create' => 'Utwórz rekord :title',
    'edit' => 'Edytuj rekord :title',
  ],

  'links' => [
    'index_page' => 'Do strony',
  ],

  'env_editor' => [
    'title' => 'Edytor ENV',
    'key' => 'Klucz',
    'var' => 'Wartość',
  ],

  'ckeditor' => [
    'upload' => [
      'success' => 'Plik został wysłany: \\n- Rozmiar: :size kb \\n- Szerokość/wysokość: :width x :height',

      'error' => [
        'common' => 'Nie można przesłać pliku.',
        'wrong_extension' => 'Plik ":file" ma niewłaściwe rozszerzenie.',
        'filesize_limit' => 'Maksymalny dozwolony rozmiar pliku to :size kb.',
        'filesize_limit_m' => 'Maksymalny dozwolony rozmiar pliku to :size Mb.',
        'imagesize_max_limit' => 'Szerokość x Wysokość = :width x :height \\n Maksymalna Szerokość x Wysokość musi wynosić: :maxwidth x :maxheight',
        'imagesize_min_limit' => 'Szerokość x Wysokość = :width x :height \\n Minimalna Szerokość x Wysokość musi wynosić: :minwidth x :minheight',
      ],
    ],

    'image_browser' => [
      'title' => 'Wstaw obraz z serwera',
      'subtitle' => 'Wybierz obraz do wstawienia',
    ],
  ],

  'table' => [
    'no-action' => 'Brak akcji',
    'deleted_all' => 'Usuń zaznaczone',
    'make-action' => 'Wyślij',
    'delete-confirm' => 'Czy na pewno chcesz usunąć ten wpis?',
    'action-confirm' => 'Czy na pewno chcesz wykonać tę akcję?',
    'delete-error' => 'Błąd podczas usuwania tego wpisu. Najpierw musisz usunąć wszystkie powiązane wpisy.',
    'destroy-confirm' => 'Czy na pewno chcesz trwale usunąć ten wpis?',
    'destroy-error' => 'Błąd podczas trwałego usuwania tego wpisu. Najpierw musisz usunąć wszystkie powiązane wpisy.',
    'error' => 'Wystąpił błąd podczas Twojego żądania',
    'filter' => 'Pokaż podobne wpisy',
    'filter-goto' => 'Pokaż',
    'save' => 'Zapisz',
    'all' => 'Wszystkie',
    'processing' => '<i class="fas fa-spinner fa-5x fa-spin"></i>',
    'loadingRecords' => 'Ładowanie...',
    'lengthMenu' => 'Pokaż _MENU_ wpisów',
    'zeroRecords' => 'Nie znaleziono pasujących rekordów.',
    'info' => 'Wyświetlono od _START_ do _END_ z _TOTAL_ wpisów',
    'infoEmpty' => 'Brak wpisów',
    'infoFiltered' => '(odfiltrowano z _MAX_ łącznej liczby wpisów)',
    'infoThousands' => ',',
    'infoPostFix' => '',
    'search' => 'Szukaj ',
    'emptyTable' => 'Brak danych dostępnych w tabeli',

    'paginate' => [
        'first' => 'Pierwsza',
        'previous' => '&larr;',
        'next' => '&rarr;',
        'last' => 'Ostatnia',
      ],
  
      'filters' => [
        'control' => 'Filtruj',
      ],
    ],
      
    
    'tree' => [
        'expand' => 'Rozwiń wszystko',
        'collapse' => 'Zwiń wszystko',
      ],
    
      'editable' => [
        'checkbox' => [
          'checked' => 'Tak',
          'unchecked' => 'Nie',
        ],
      ],
    
      'select' => [
        'nothing' => 'Nic nie wybrano',
        'selected' => 'wybranych',
        'placeholder' => 'Wybierz z listy',
        'no_items' => 'Brak elementów',
        'init' => 'Wybierz',
        'empty' => 'pusty',
        'limit' => 'i jeszcze ${count} więcej',
        'more' => 'i jeszcze :count więcej',
        'deselect' => 'Odznacz',
        'short' => 'Wprowadź minimum :min znaków',
      ],
    
      'image' => [
        'browse' => 'Wybierz obraz',
        'browseMultiple' => 'Wybierz obrazy',
        'remove' => 'Usuń obraz',
        'removeMultiple' => 'Usuń obrazy',
      ],
    
      'file' => [
        'browse' => 'Wybierz plik',
        'browseMultiple' => 'Wybierz pliki',
        'remove' => 'Usuń plik',
        'insert_link' => 'Wstaw link',
      ],
    
      'button' => [
        'yes' => 'Tak',
        'no' => 'Nie',
        'cancel' => 'Anuluj',
        'save' => 'Zapisz',
        'new-entry' => 'Nowy wpis',
        'edit' => 'Edytuj',
        'restore' => 'Przywróć',
        'delete' => 'Usuń',
        'destroy' => 'Trwale usuń',
        'save_and_close' => 'Zapisz i zamknij',
        'save_and_create' => 'Zapisz i utwórz',
        'moveUp' => 'Przenieś w górę',
        'moveDown' => 'Przenieś w dół',
        'download' => 'Pobierz',
        'add' => 'Dodaj',
        'remove' => 'Usuń',
        'clear' => 'Wyczyść',
      ],
    
      'message' => [
        'created' => 'Rekord został utworzony pomyślnie',
        'updated' => 'Rekord został zaktualizowany pomyślnie',
        'deleted' => 'Rekord został usunięty pomyślnie',
        'destroyed' => 'Rekord został trwale usunięty pomyślnie',
        'restored' => 'Rekord został przywrócony pomyślnie',
        'something_went_wrong' => 'Coś poszło nie tak!',
        'are_you_sure' => 'Czy jesteś pewny?',
        'access_denied' => 'Dostęp zablokowany',
        'validation_error' => 'Błąd walidacji',
      ],
    
      'related' => [
        'unique' => 'Ta relacja nie jest unikalna',
      ],
    
      'seo' => [
        'title' => 'Tytuł',
        'description' => 'Opis',
      ],
    ];
    
