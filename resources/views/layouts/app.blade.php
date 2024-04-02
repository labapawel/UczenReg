<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <a href="https://technikum.wsi.edu.pl"><img src="/164logo-01.png" alt="Prywatne Technikum Informatyczne"></a>
            </div>
        </div>
    </div>
    </header>
    <main class="py-4">
            @yield('content')
    </main>
</body>
</html>
