@php
    $configuracao = \App\Models\Configuracao::get();
@endphp
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{ URL::asset($configuracao->logo) }}">
    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css') }}">
    {{-- Owl carrousel --}}
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/css/owl.theme.default.min.css') }}">
    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css') }}">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    {{-- App theme --}}
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
</head>
<body class="bg-light">
    <figure id="background-image-container">
        <img src="{{ URL::asset('storage/template_images/top-background-home.jpg') }}" alt="">
    </figure>
    @include('web.layout.header', \compact('configuracao'))
    <main id="main-content">
        @yield('content')
    </main>
    @include('web.layout.footer')
    {{-- REQUIRED SCRIPTS --}}
    {{-- jQuery --}}
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    {{-- Bootstrap --}}
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- Fontawesome --}}
    <script src="{{ asset('assets/fontawesome-free/js/all.min.js') }}"></script>
    {{-- OwlCarosel --}}
    <script src="{{ asset('assets/owl-carousel/js/owl.carousel.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
