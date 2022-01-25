<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('css/web.css') }}">
</head>
<body>
    @include('web.layout.header')
    <main id="main-content">
        @yield('content')
    </main>
    @include('web.layout.footer')
    @stack('scripts')
</body>
</html>
