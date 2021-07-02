@extends('layouts.template-frontend')

@section('title', 'Tagging | Agencia de Publicidad digital')

@section('content')
    <!--------------------------
        * BANNER *
    --------------------------->
    <section class="banner">
        <div class="container">
            <div class="banner-content">
                <div class="info">
                    <div class="content">
                        <h1 class="banner-subtitle">Somos la <span>agencia digital</span> que</h1>
                        <p class="banner-title">Hacemos de <span>tu marca la diferencia</span></p>
                        <p class="banner-description">Somos especialistas en generar estrategias digitales que generen verdaderos resultados. CERO HUMO más ventas.</p>
                        <a href="#" class="banner-link">Comienza aquí</a>
                    </div>
                </div>
                <div class="img">
                    <img src="{{ asset('img/portadas/idea.png') }}" class="banner-img" alt="Tagging">
                    <img src="{{ asset('img/icons/Facebook.png') }}" class="icon icon-fb" alt="Facebook">
                    <img src="{{ asset('img/icons/Instagram.png') }}" class="icon icon-ig" alt="Instagram">
                    <img src="{{ asset('img/icons/Linkedin.png') }}" class="icon icon-lk" alt="Linkedin">
                    <img src="{{ asset('img/icons/Messenger.png') }}" class="icon icon-ms" alt="Messenger">
                    <img src="{{ asset('img/icons/Twitter.png') }}" class="icon icon-tw" alt="Twitter">

                    <span class="icon-rombo rombo-1 rombo-yellow"></span>
                    <span class="icon-rombo rombo-2 rombo-white"></span>
                    <span class="icon-rombo rombo-3 rombo-yellow"></span>
                    <span class="icon-rombo rombo-4 rombo-white"></span>
                </div>
            </div>
            {{-- <span class="adorno-1"></span> --}}
        </div>
    </section>

    <!--------------------------
        * TE SUCEDE ESTO *
    --------------------------->
    <section class="te-sucede-esto">
        <div class="container">
            {{-- <span class="adorno-2"></span> --}}
            <div class="info">
                <div class="line"></div>
                <p class="pre-title">Déjanos adivinar</p>
                <p class="subtitle">¿Te sucede esto?</p>
            </div>
            <div class="cards">
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="{{ asset('img/icons-svg/time.svg') }}"></object>
                            <p class="description">Quieres pasar tu negocio al mundo digital, pero no tienes el tiempo necesario para dedicarte a ello</p>
                        </div>
                    </div>
                </div>
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="{{ asset('img/icons-svg/question.svg') }}"></object>
                            <p class="description">Te cuesta entender como funciona el mundo de las redes sociales para poder ofrecer tus productos o servicios</p>
                        </div>
                    </div>
                </div>
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="{{ asset('img/icons-svg/idea.svg') }}"></object>
                            <p class="description">Quieres emprender tu negocio mediante las redes sociales o la web y necesitas hacerlo correctamente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection