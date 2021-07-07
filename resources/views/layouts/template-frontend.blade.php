<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Color de la barra de direcciones -->
    <meta name="theme-color" content="#7B57FA">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon-tagging.png') }}" type="image/x-icon">
    <!-- Favicon -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Kursor -->
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
    <!-- Kursor -->
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Muuri -->
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.4/dist/muuri.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>


</head>
<body class="bg-morado">

    <div class="scroll-top" id="scroll-top">
        <i class='bx bx-chevron-up'></i>
    </div>
    
    <!--------------------------
        * HEADER *
    --------------------------->
    <header class="header">
        <nav class="header-desktop">
            <div class="logo">
                <a href="{{ route('inicio') }}" class="logo-link">
                    <img src="{{ asset('img/logo-tagging.svg')}}" alt="Tagging">
                </a>
            </div>  
            <div class="enlaces">
                <div class="menu">
                    <a href="{{ route('inicio') }}" class="menu-link {{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
                    <a href="{{ route('quienes-somos') }}" class="menu-link {{ request()->routeIs('quienes-somos') ? 'active' : '' }}">Quiénes somos</a>
                    <a href="{{ route('servicios') }}" class="menu-link {{ request()->routeIs('servicios') ? 'active' : '' }}">Servicios</a>
                    <a href="#" class="menu-link">Blog</a>
                    <a href="{{ route('portafolio') }}" class="menu-link {{ request()->routeIs('portafolio') ? 'active' : '' }}">Portafolio</a>
                    <a href="#" class="menu-link">Clientes</a>
                </div>
                <div class="relative contacto">
                    <a href="#" class="contacto-link">Contáctanos</a>
                </div>
            </div>
        </nav>
        <nav class="header-mobile">
            <div class="logo">
                <a href="{{ route('inicio') }}" class="logo-link">
                    <img src="{{ asset('img/logo-tagging.svg') }}" alt="Tagging">
                </a>
            </div>
            <div class="menu">
                <div class="menu-toggle" id="menu-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </div>
        </nav>
    </header>

    <!--------------------------
        * HEADER TOP *
    --------------------------->
    <div class="header-top" id="header-top">
        <nav class="header-top-desktop">
            <div class="logo">
                <a href="{{ route('inicio') }}" class="logo-link">
                    <img src="{{ asset('img/logo-tagging.svg') }}" alt="Tagging">
                </a>
            </div>  
            <div class="enlaces">
                <div class="menu">
                    <a href="{{ route('inicio') }}" class="menu-link {{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
                    <a href="{{ route('quienes-somos') }}" class="menu-link {{ request()->routeIs('quienes-somos') ? 'active' : '' }}">Quiénes somos</a>
                    <a href="{{ route('servicios') }}" class="menu-link {{ request()->routeIs('servicios') ? 'active' : '' }}">Servicios</a>
                    <a href="#" class="menu-link">Blog</a>
                    <a href="{{ route('portafolio') }}" class="menu-link {{ request()->routeIs('portafolio') ? 'active' : '' }}">Portafolio</a>
                    <a href="#" class="menu-link">Clientes</a>
                </div>
                <div class="contacto">
                    <a href="#" class="contacto-link">Contáctanos</a>
                </div>
            </div>
        </nav>
        <nav class="header-top-mobile">
            <div class="logo">
                <a href="{{ route('inicio') }}" class="logo-link w-full">
                    <img src="{{ asset('img/logo-tagging.svg') }}" alt="Tagging">
                </a>
            </div>
            <div class="menu">
                <div class="menu-toggle" id="menu-toggle-top">
                    <i class='bx bx-menu'></i>
                </div>
            </div>
        </nav>
    </div>

    <!--------------------------
        * HEADER POPUP *
    --------------------------->
    <div class="menu-fondo-popup" id="menu-popup">
        <div class="menu-popup">
            <div class="menu">
                <a href="{{ route('inicio') }}" class="menu-link {{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
                <a href="{{ route('quienes-somos') }}" class="menu-link {{ request()->routeIs('quienes-somos') ? 'active' : '' }}">Quiénes somos</a>
                <a href="{{ route('servicios') }}" class="menu-link {{ request()->routeIs('servicios') ? 'active' : '' }}">Servicios</a>
                <a href="#" class="menu-link">Blog</a>
                <a href="{{ route('portafolio') }}" class="menu-link {{ request()->routeIs('portafolio') ? 'active' : '' }}">Portafolio</a>
                <a href="#" class="menu-link">Clientes</a>
            </div>
            <div class="contacto">
                <a href="#" class="contacto-link">Contáctanos</a>
            </div>
            <div class="close" id="menu-close-popup">
                <i class='bx bx-x'></i>
            </div>
        </div>
    </div>


    @yield('content')

    <!--------------------------
        * FOOTER *
    --------------------------->
    <footer class="footer">
        <div class="container">
            <div class="info">
                <a href="{{ route('inicio') }}">
                    <img src="{{ asset('img/logo-tagging.svg') }}" alt="Tagging">
                </a>
                <hr>
                <p class="description">Somos una agencia digital encargada de conectar marcas con personas mediante nuestra filosofía hacemos que tu negocio logre el éxito deseado</p>
            </div>
            <div class="sitemap">
                <p class="subtitle-footer">Mapa del sitio</p>
                <hr>
                <ul>
                    <li>
                        <a href="{{ route('inicio') }}">
                            <i class='bx bx-chevron-right'></i></span> Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('quienes-somos') }}">
                            <i class='bx bx-chevron-right'></i></span> Quienes somos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('servicios') }}">
                            <i class='bx bx-chevron-right'></i></span> Servicios
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-chevron-right'></i></span> Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portafolio') }}">
                            <i class='bx bx-chevron-right'></i></span> Portafolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-chevron-right'></i></span> Clientes
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-chevron-right'></i></span> Contáctanos
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contacto">
                <p class="subtitle-footer">Síguenos, te encantará</p>
                <hr>
                <div class="icons-socials">
                    <a href="https://www.facebook.com/TaggingDigital" target="_blank">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://www.instagram.com/taggingdigital/" target="_blank">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://www.linkedin.com/company/tagging-digital/" target="_blank">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=+51937205798&text=Buenas,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20su%20agencia" target="_blank">
                        <i class='bx bxl-whatsapp'></i>
                    </a>
                </div>
                <p class="subtitle-footer">Contáctanos</p>
                <hr>
                <div class="links-contacto">
                    <div>
                        <a href="mailto:hola@taggingdigital.com"><i class='bx bx-mail-send'></i> hola@taggingdigital.com</a> 
                    </div>
                    <div>
                        <a href="tel:+51937205798"><i class='bx bxl-whatsapp'></i> 937 205 798</a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <p>Copyright © Tagging 2021 - Todos los derechos reservados</p>
            <p>Hacemos de tu marca la diferencia</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>