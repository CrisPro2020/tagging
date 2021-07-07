@extends('layouts.template-frontend')

@section('title', 'Nuestros proyectos | Tagging - Agencia de Publicidad digital')

@section('content')

    <!--------------------------
        * BANNER *
    --------------------------->
    <section class="banner-portafolio">
        <div class="container">
            <div class="info">
                <p class="subtitle">Detrás de cada <span class="text-amarillo">proyecto</span> hay un <span class="text-amarillo">cliente feliz!</span></p>
            </div>
        </div>
    </section>

    <!--------------------------
        * 1. FILTRO *
    --------------------------->
    <section class="filtro-proyectos">
        <div class="container">
            <a href="#" class="opc">Todos</a>

            <a href="#" class="opc">Redes sociales</a>

            <a href="#" class="opc">Desarrollo Web</a>

            <a href="#" class="opc">Branding</a>
        </div>
    </section>

    <!--------------------------
        * 2. PROYECTOS *
    --------------------------->
    <div class="proyectos">
        <div class="container">
            <div class="grid proyectos-container" id="grid">
                <div class="item" data-categoria="branding">
                    <div class="item-content">
                        <img src="{{ asset('img/portfolio/viaja-con-tivo.jpg') }}" alt="Viaja con Tivo">
                        <p class="name-proyecto">Viaja con Tivo</p>
                        <span class="category-proyecto">Branding</span>
                    </div>
                </div>

                <div class="item" data-categoria="desarrollo web">
                    <div class="item-content">
                        <img src="{{ asset('img/portfolio/moda-y-empresa.jpg') }}" alt="Moda y Empresa">
                        <p class="name-proyecto">Moda&Empresa</p>
                        <span class="category-proyecto">Desarrollo Web</span>
                    </div>
                </div>

                <div class="item" data-categoria="redes sociales">
                    <div class="item-content">
                        <img src="{{ asset('img/portfolio/pompon.jpg') }}" alt="Pompón">
                        <p class="name-proyecto">Pompón</p>
                        <span class="category-proyecto">Redes sociales</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------
        * 3. TE GUSTA LO QUE VES *
    --------------------------->
    <div class="cta-portafolio">
        <div class="container">
            <div class="box">
                <object type="image/svg+xml" data="{{ asset('img/icons-svg/happy.svg') }}">
                </object>
                <p class="subtitle">¿Te gusta lo que ves?</p>
                <p class="description">Déjanos ayudarte con tu negocio, cuéntanos más sobre ti y tu negocio, ¿que te parece?</p>
                <a href="#" class="button">Me parece genial</a>
            </div>
            <span class="icon-rombo rombo-1 rombo-white"></span>
            <span class="icon-rombo rombo-2 rombo-yellow"></span>
            <span class="icon-rombo rombo-3 rombo-white"></span>
            <span class="icon-rombo rombo-4 rombo-yellow"></span>
        </div>
    </div>
@endsection