<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @stack('css')
    </head>
    <body class="page">
        @include('components.header')
        <div class="content">
            @yield('content')
        </div>
        <footer class="main-footer">
        </footer>
    </body>
    @stack('js')
</html>
