<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- qui credo che devo inserire i link per il scss --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <div class="container">
            {{-- qui inserisco l'header della pagina --}}
            @include('partials.navbar')
        </div>
        @include('partials.jumbo')
    </header>

    <main>
        <div class="container">
            @yield('content')        

        </div>
    </main>

    <footer>
        <div class="container">
            {{-- qui inserisco il footer della pagina --}}

        </div>
    </footer>
</body>
</html>