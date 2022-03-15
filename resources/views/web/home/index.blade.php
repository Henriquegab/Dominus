@extends('web.layout.layout')
@section('content')
<section id="home-carousel" class="container">
    <div class="owl-carousel">
        <div class="carousel-item">
            <div class="col-md-6 text-white">
                <h1>Uma comida deliciosa para seu dia dia</h1>
                <p>Venha conhecer nossas delícias caseiras e se encantar com o sabor</p>
            </div>
            <figure class="m-0 col-md-6"><img src="{{ URL::asset('storage/images/carousel-image-1.png') }}" alt=""></figure>
        </div>
        <div class="carousel-item">
            <div class="col-md-6 text-white">
                <h1>Uma comida deliciosa para seu dia dia</h1>
                <p>Venha conhecer nossas delícias caseiras e se encantar com o sabor</p>
            </div>
            <figure class="m-0 col-md-6"><img src="{{ URL::asset('storage/images/carousel-image-2.png') }}" alt=""></figure>
        </div>
        <div class="carousel-item">
            <div class="col-md-6 text-white">
                <h1>Uma comida deliciosa para seu dia dia</h1>
                <p>Venha conhecer nossas delícias caseiras e se encantar com o sabor</p>
            </div>
            <figure class="m-0 col-md-6"><img src="{{ URL::asset('storage/images/carousel-image-3.png') }}" alt=""></figure>
        </div>
    </div>
</section>
<section class="container">
    <div class="card card-body">

    </div>
</section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#home-carousel .owl-carousel").owlCarousel({
                items: 1,
                onInitialized: function(event) {
                    $("#home-carousel .owl-carousel").find('.owl-dot > span').html('<i class="far fa-circle text-white"></i>')
                    $("#home-carousel .owl-carousel").find('.owl-dot.active > span').html('<i class="fas fa-circle text-white"></i>')
                },
                onChanged: function(event) {
                    $("#home-carousel .owl-carousel").find('.owl-dot > span').html('<i class="far fa-circle text-white"></i>')
                    $("#home-carousel .owl-carousel").find('.owl-dot.active > span').html('<i class="fas fa-circle text-white"></i>')
                },
            });
        })
    </script>
@endpush
