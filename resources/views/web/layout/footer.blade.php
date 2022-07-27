@php
    $redes_sociais = \App\Models\RedeSocial::first();
@endphp
<footer id="main-footer">
    <div class="container mx-auto">
        <div class="row pt-3">
            <div class="col-sm-6">
                <h5>Também veja</h5>
                <nav class="footer-nav-list">
                    <a href="{{ route('home.index') }}">Home</a>
                    <a href="{{ route('home.index') }}#cardapio">Cardápio do dia</a>
                    <a href="{{ route('home.index') }}#contato">Contato</a>
                </nav>
            </div>
            <div class="col-sm-6">
                <h5>Encontre-nos nas redes sociais</h5>
                <nav class="footer-nav-list">
                    <a href="tel:{{ preg_replace('/([() \-_]*)/i', '', $redes_sociais->telefone) }}" target="_blank">Telefone</a>
                    <a href="{{ $redes_sociais->ifood }}" target="_blank">IFood</a>
                    <a href="https://wa.me/55{{ preg_replace('/([() \-_]*)/i', '', $redes_sociais->whatsapp) }}" target="_blank">Whatsapp</a>
                </nav>
            </div>
        </div>
        <div class="row py-3">
            <div class="col">
                Copyright Dominus Restaurante 2022, todos os direitos reservados.
            </div>
        </div>
    </div>
</footer>
