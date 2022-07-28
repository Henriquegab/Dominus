<header id="main-header">
    <div class="container d-flex pt-2 px-0">
        <a class="logo-container col d-flex justify-content-start" href="{{ route('home.index') }}">
            <figure class="header-logo m-0">
                <img src="{{ URL::asset($configuracao->logo) }}" alt="logo do Dominus" class="img-fluid">
            </figure>
            <title>Dominus Restaurante</title>
            <span class="header-title">
                <h2>Dominus Restaurante</h2>
            </span>
        </a>
        <div class="col-md main-nav-list-container">
            <ul class="main-nav-list">
                <li class="nav-item"><a href="{{ route('home.index') }}">HOME</a></li>
                <li class="nav-item"><a href="{{ route('home.index') }}#cardapio">CARDÁPIO DO DIA</a></li>
                <li class="nav-item"><a href="{{ route('home.index') }}#contato">CONTATO</a></li>
            </ul>
        </div>
    </div>
</header>
