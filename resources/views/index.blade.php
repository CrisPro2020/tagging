<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tagging | Agencia de Publicidad digital</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Kursor -->
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
    <!-- Kursor -->
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body class="bg-morado">
    
    <!--------------------------
        * HEADER *
    --------------------------->
    <header class="header">
        <nav class="header-desktop">
            <div class="logo">
                <a href="#" class="logo-link">
                    <img src="img/logo-tagging.svg" alt="Tagging">
                </a>
            </div>  
            <div class="enlaces">
                <div class="menu">
                    <a href="#" class="menu-link">Inicio</a>
                    <a href="#" class="menu-link">Quiénes somos</a>
                    <a href="#" class="menu-link">Servicios</a>
                    <a href="#" class="menu-link">Blog</a>
                    <a href="#" class="menu-link">Portafolio</a>
                    <a href="#" class="menu-link">Clientes</a>
                </div>
                <div class="relative contacto">
                    <a href="#" class="contacto-link">Contáctanos</a>
                </div>
            </div>
        </nav>
        <nav class="header-mobile">
            <div class="logo">
                <a href="#" class="logo-link">
                    <img src="img/logo-tagging.svg" alt="Tagging">
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
                <a href="#" class="logo-link">
                    <img src="img/logo-tagging.svg" alt="Tagging">
                </a>
            </div>  
            <div class="enlaces">
                <div class="menu">
                    <a href="#" class="menu-link">Inicio</a>
                    <a href="#" class="menu-link">Quiénes somos</a>
                    <a href="#" class="menu-link">Servicios</a>
                    <a href="#" class="menu-link">Blog</a>
                    <a href="#" class="menu-link">Portafolio</a>
                    <a href="#" class="menu-link">Clientes</a>
                </div>
                <div class="contacto">
                    <a href="#" class="contacto-link">Contáctanos</a>
                </div>
            </div>
        </nav>
        <nav class="header-top-mobile">
            <div class="logo">
                <a href="#" class="logo-link w-full">
                    <img src="img/logo-tagging.svg" alt="Tagging">
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
                <a href="#" class="menu-link">Inicio</a>
                <a href="#" class="menu-link">Quiénes somos</a>
                <a href="#" class="menu-link">Servicios</a>
                <a href="#" class="menu-link">Blog</a>
                <a href="#" class="menu-link">Portafolio</a>
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
                    <img src="img/portadas/idea.png" class="banner-img" alt="Tagging">
                    <img src="img/icons/Facebook.png" class="icon icon-fb" alt="Facebook">
                    <img src="img/icons/Instagram.png" class="icon icon-ig" alt="Instagram">
                    <img src="img/icons/Linkedin.png" class="icon icon-lk" alt="Linkedin">
                    <img src="img/icons/Messenger.png" class="icon icon-ms" alt="Messenger">
                    <img src="img/icons/Twitter.png" class="icon icon-tw" alt="Twitter">

                    <span class="icon-rombo rombo-1 rombo-yellow"></span>
                    <span class="icon-rombo rombo-2 rombo-white"></span>
                    <span class="icon-rombo rombo-3 rombo-yellow"></span>
                    <span class="icon-rombo rombo-4 rombo-white"></span>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------
        * TE SUCEDE ESTO *
    --------------------------->
    <section class="te-sucede-esto">
        <div class="container">
            <div class="info">
                <div class="line"></div>
                <h6 class="pre-title">Déjanos adivinar</h6>
                <p class="subtitle">¿Te sucede esto?</p>
            </div>
            <div class="cards">
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="img/icons-svg/time.svg"></object>
                            <p class="description">Quieres pasar tu negocio al mundo digital, pero no tienes el tiempo necesario para dedicarte a ello</p>
                        </div>
                    </div>
                </div>
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="img/icons-svg/question.svg"></object>
                            <p class="description">Te cuesta entender como funciona el mundo de las redes sociales para poder ofrecer tus productos o servicios</p>
                        </div>
                    </div>
                </div>
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="img/icons-svg/idea.svg"></object>
                            <p class="description">Quieres emprender tu negocio mediante las redes sociales o la web y necesitas hacerlo correctamente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------
        * YA NO SABES POR DONDE EMPEZAR *
    --------------------------->
    <section class="por-donde-empezar">
        <div class="container">
            <div class="info-1">
                <div class="imgs">
                    <span class="icon-rombo rombo-1 rombo-yellow"></span>
                    <span class="icon-rombo rombo-2 rombo-white"></span>
                    <span class="icon-social icon-1">
                        <object type="image/svg+xml" data="img/icons-svg/medios-de-comunicacion.svg"></object>
                    </span>
                </div>
                <div class="content">
                    <span class="line-left"></span>
                    <div class="content-info">
                        <p class="description">Ves vídeos, lees, escuchas podcats donde te dicen que debes tener tu negocio en el mundo digital tanto en las redes sociales como en la web porque esto te ayuda a vender más a clientes verdaderamente potenciales.</p>
                        <p class="description">Todo esto puede ser confuso para ti y luego de...</p>
                    </div>
                </div>
                <div class="imgs">
                    <span class="icon-social icon-2">
                        <object type="image/svg+xml" data="img/icons-svg/network.svg"></object>
                    </span>
                    <span class="icon-rombo rombo-3 rombo-white"></span>
                    <span class="icon-rombo rombo-4 rombo-yellow"></span>
                </div>
            </div>
            <div class="info-2">
                <div class="line"></div>
                <h6 class="pre-title">Tanta tecnología y dudas hasta</h6>
                <p class="subtitle">Ya no sabes ni por donde empezar...</p>
            </div>
        </div>
    </section>

    <!--------------------------
        * ENTONCES *
    --------------------------->
    <section class="entonces">
        <div class="container">
            <div class="line"></div>
            <h6 class="pre-title">Entonces</h6>
            <object type="image/svg+xml" data="img/icons-svg/escala.svg"></object>
        </div>
        <div class="container-full">
            <div class="container">
                <p class="subtitle-2">¿Cómo vamos a conseguir que tu negocio pueda surgir y vender en el mundo digital de manera eficiente y exitosa?</p>
                <span class="icon-rombo rombo-yellow"></span>
            </div>
        </div>
    </section>

    <!--------------------------
        * JUNTOS *
    --------------------------->
    <section class="juntos">
        <div class="container">
            <div class="line"></div>
            <h6 class="text-secondary font-semibold mb-5 uppercase lg:text-lg">Juntos</h6>
            <p class="subtitle text-3xl lg:text-2xl font-semibold text-white font-display">Así lo conseguiremos</p>
        </div>
        <div class="container-full">
            <div class="container">
                <div>
                    <div class="card">
                        <span>
                            <object type="image/svg+xml" data="img/icons-svg/comunication.svg"></object>
                        </span>
                        <p class="valor">Comunicación constante</p>
                        <hr class="separador">
                        <p class="description">Nos mantendremos comunicados en todo momento para ver el avance de tu negocio</p>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <span>
                            <object type="image/svg+xml" data="img/icons-svg/content-valor.svg"></object>
                        </span>
                        <p class="valor">Contenido de valor</p>
                        <hr class="separador">
                        <p class="description">Recibirás contenido de valor como ayuda para el crecimiento de tu negocio</p>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <span>
                            <object type="image/svg+xml" data="img/icons-svg/pre-asesorias.svg"></object>
                        </span>
                        <p class="valor">Pre - asesorías valiosas</p>
                        <hr class="separador">
                        <p class="description">Resolveremos las dudas y consultas que tengas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------
        * ENCANTADOS, SOMOS TAGGING *
    --------------------------->
    <section class="encantados">
        <div class="container">
            <div class="img">
                <span class="absolute icon-rombo rombo-1 rombo-yellow"></span>
                <span class="absolute icon-rombo rombo-2 rombo-white"></span>
                <img src="img/somos-tagging.png" alt="Equipo de Tagging">
            </div>
            <div class="info">
                <div class="content">
                    <h6 class="pre-title">Hola, encantados</h6>
                    <p class="subtitle">Somos <br>Tagging</p>
                    <hr class="separador mb-7">
                    <p class="description">Una agencia digital nacida en época de pandemia con el objetivo de ayudar a las pequeñas y medianas empresas a surgir y resurgir en el mundo digital.</p>
                    <a href="#" class="button">Conócenos un poco más</a>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------
        * CALL TO ACTION BOX *
    --------------------------->
    <section class="call-to-action-1">
        <div class="container">
            <span class="icon-rombo rombo-1 rombo-yellow"></span>
            <span class="icon-rombo rombo-2 rombo-yellow"></span>
            <div class="line"></div>
            <div class="box">
                <object data="img/icons-svg/money.svg" type="image/svg+xml"></object>
                <p class="subtitle-2">¿Quieres que tu empresa surga en el mundo digital de manera exitosa?</p>
                <h6 class="pre-title">Te ayudaremos a dar el siguiente paso</h6>
                <p class="description">Juntos haremos surgir e impulsar tu empresa en el mundo digital con las mejores estrategias que se adecuen a tu negocio.</p>
                <a href="#" class="button">¿Comenzamos?</a>
            </div>
            <span class="icon-rombo rombo-3 rombo-white"></span>
            <span class="icon-rombo rombo-4 rombo-white"></span>
        </div>
    </section>

    <!--------------------------
        * TESTIMONIOS DE CLIENTES CARRUSEL *
    --------------------------->
    <section class="testimonios">
        <div class="container">
            <div class="line"></div>
            <h6 class="pre-title">Mira lo que nuestros clientes</h6>
            <p class="subtitle">Dicen de nosotros</p>

            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper cards">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="img">
                                <img src="img/clientes/cliente-1.jpg" alt="Moda y Empresa">
                            </div>
                            <div class="content">
                                <p class="testimonio">“Trabajamos con Tagging desde hace algunos meses y estamos muy contentos con los resultados y el equipo a cargo de nuestra cuenta. Son muy creativos, siempre dispuestos a apoyarnos y en búsqueda de nuevos temas. Recomendados 100%”</p>
                                <hr>
                                <span class="autor">Ana García</span>
                                <span class="job">Gerente general de Moda&Empresa</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="img">
                                <img src="img/clientes/cliente-1.jpg" alt="Moda y Empresa">
                            </div>
                            <div class="content">
                                <p class="testimonio">“Trabajamos con Tagging desde hace algunos meses y estamos muy contentos con los resultados y el equipo a cargo de nuestra cuenta. Son muy creativos, siempre dispuestos a apoyarnos y en búsqueda de nuevos temas. Recomendados 100%”</p>
                                <hr>
                                <span class="autor">Ana García</span>
                                <span class="job">Gerente general de Moda&Empresa</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="img">
                                <img src="img/clientes/cliente-1.jpg" alt="Moda y Empresa">
                            </div>
                            <div class="content">
                                <p class="testimonio">“Trabajamos con Tagging desde hace algunos meses y estamos muy contentos con los resultados y el equipo a cargo de nuestra cuenta. Son muy creativos, siempre dispuestos a apoyarnos y en búsqueda de nuevos temas. Recomendados 100%”</p>
                                <hr>
                                <span class="autor">Ana García</span>
                                <span class="job">Gerente general de Moda&Empresa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!--------------------------
        * CALL TO ACTION 2 *
    --------------------------->
    <section class="call-to-action-2">
        <div class="container">
            <p class="subtitle-2">Comienza hoy a preparar todo para tu emprendimiento digital</p>
            <hr>
            <p class="description">Descárgate nuestra guía gratuita de <span>“LOS 10 PASOS PARA SURGIR EN EL MUNDO DIGITAL DE MANERA EXITOSA”</span> y descubre el proceso paso a paso para emprender en este mundo tan competitivo y maravilloso.</p>
            <a href="#" class="button">Quiero mi guía gratuita</a>
        </div>
    </section>

    <!--------------------------
        * FOOTER *
    --------------------------->
    <footer class="footer">
        <div class="container">
            <div class="info">
                <a href="index.html">
                    <img src="img/logo-tagging.svg" alt="Tagging">
                </a>
                <hr>
                <p class="description">Somos una agencia digital encargada de conectar marcas con personas mediante nuestra filosofía hacemos que tu negocio logre el éxito deseado</p>
            </div>
            <div class="sitemap">
                <p class="subtitle-footer">Mapa del sitio</p>
                <hr>
                <ul>
                    <li>
                        <a href="#">
                            <i class='bx bx-chevron-right'></i></span> Inicio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-chevron-right'></i></span> Quienes somos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-chevron-right'></i></span> Servicios
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-chevron-right'></i></span> Blog
                        </a>
                    </li>
                    <li>
                        <a href="#">
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