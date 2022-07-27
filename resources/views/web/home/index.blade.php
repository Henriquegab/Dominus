@extends('web.layout.layout')
@section('content')
<section id="home-carousel">
    <div class="owl-carousel owl-carousel-light">
        @foreach ($carrosseis as $carrossel)
            <div class="carousel-item">
                <div class="col-md-6 text-white">
                    <h2>{{ $carrossel->nome }}</h2>
                    <p>{{ $carrossel->descricao }}</p>
                </div>
                <figure class="m-0 col-md-6"><img src="{{ URL::asset($carrossel->imagem) }}" alt=""></figure>
            </div>
        @endforeach
    </div>
</section>
<section class="section-small">
    <div class="card shadow-sm">
        <div id="contato" class="split-section flex-wrap-reverse px-2">
            <div class="col-md-6 py-4">
                <h2 class="mb-4">Faça seu pedido pelo whatsapp</h2>
                <p class="mb-4">Entre em contato pelo whatsapp e receba o cardápio e faça pedidos sem necessidade de aplicativos</p>
                <a  href="https://wa.me/55{{ preg_replace('/([() \-_]*)/i', '', $redes_sociais->whatsapp) }}" target="_blank" class="button button-wpp button-icon">
                    <span class="text">Mande-nos uma mensagem</span>
                    <span class="icon"><i class="fab fa-whatsapp"></i></span>
                </a>
            </div>
            <div class="col-md-6 image">
                <figure>
                    <img src="{{ URL::asset('storage/images/home-Whatsapp-celular-banner.png') }}" alt="">
                </figure>
            </div>
        </div>
        <div class="split-section px-2">
            <div class="col-md-6 image">
                <figure>
                    <img src="{{ URL::asset('storage/images/home-IFood-celular-banner.png') }}" alt="">
                </figure>
            </div>
            <div class="col-md-6 py-4">
                <h2 class="mb-4">Também estamos no IFood</h2>
                <p class="mb-4">Acesse o dominus pelo IFood e tenha acesso aos nossos deliciosos pratos onde quiser</p>
                <a href="{{ $redes_sociais->ifood }}" target="_blank" class="button button-ifood button-icon">
                    <span class="icon"><i class="fas fa-utensils"></i></span>
                    <span class="text">Visite-nos no IFood</span>
                </a>
            </div>
        </div>
        <div class="split-section image-bottom bg_secondary px-2 pb-0">
            <div class="col-md-6 py-4">
                <h2 class="mb-4">Ligue para a gente e faça seu pedido</h2>
                <p class="mb-4">Entre em contato pelo whatsapp e receba o cardápio e faça pedidos sem necessidade de aplicativos</p>
                <span class="button button-white-border button-icon no_hover">
                    <span class="icon"><i class="fas fa-phone"></i></span>
                    <a href="tel:{{ preg_replace('/([() \-_]*)/i', '', $redes_sociais->telefone) }}" class="text h4 m-0">{{ $redes_sociais->telefone }}</a>
                </span>
            </div>
            <div class="col-md-6 image">
                <figure>
                    <img src="{{ URL::asset('storage/images/home-phone-banner.png') }}" alt="">
                </figure>
            </div>
        </div>
        <div class="pitbar bg_golden text-center">
            <h3 class="m-0">Atendemos somente Montes Claros e região</h3>
        </div>
        <div class="foodmenu-list">
            <h2 class="text-center my-4">Cardápio do dia</h2>
            <div id="cardapio" class="menu">
                @foreach ($pratos as $prato)
                    <div class="menu-item">
                        <figure class="image">
                            <img src="{{ URL::asset('storage/images/'.$prato->imagem) }}" alt="cardapio">
                        </figure>
                        <div class="content">
                            <h5 class="title">{{ $prato->nome }}</h5>
                            <span class="description">{{ $prato->conteudo }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#home-carousel .owl-carousel").owlCarousel({
                items: 1,
                nav: true,
                loop: true,
                onInitialized: function(event) {
                    const carousel = $("#home-carousel .owl-carousel");
                    // Inicializando os dots
                    carousel.find('.owl-dot > span').html('<i class="far fa-circle"></i>')
                    carousel.find('.owl-dot.active > span').html('<i class="fas fa-circle"></i>')
                    // Inicializando as setas
                    carousel.find('.owl-prev').html('<i class="fas fa-chevron-left"></i>')
                    carousel.find('.owl-prev').attr('title', 'Slide anterior')
                    carousel.find('.owl-next').html('<i class="fas fa-chevron-right"></i>')
                    carousel.find('.owl-next').attr('title', 'Próximo slide')
                },
                onChanged: function(event) {
                    const carousel = $("#home-carousel .owl-carousel");
                    // Atualizando os dots
                    carousel.find('.owl-dot > span').html('<i class="far fa-circle"></i>')
                    carousel.find('.owl-dot.active > span').html('<i class="fas fa-circle"></i>')
                },
            });
        })
    </script>
@endpush
